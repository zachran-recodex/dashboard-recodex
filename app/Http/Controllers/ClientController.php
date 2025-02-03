<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::orderByDesc('id')->paginate(10);

        $statistics = [
            'total' => Client::count(),
            'active' => Client::where('status', 'active')->count(),
            'expiring_soon' => Client::where('expiry_date', '<=', now()->addDays(30))->count(),
        ];

        return view('dashboard.clients.index', compact('clients', 'statistics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'domain' => 'required|string|unique:clients,domain|max:255',
            'type' => 'required|string|max:255',
            'billing_cycle' => ['required', Rule::in(['monthly', 'quarterly', 'semi-annually', 'annually'])],
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'email' => 'required|email|unique:clients,email|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string',
        ]);

        // Set default status to active
        $validated['status'] = 'active';

        // Generate slug from client name
        $validated['slug'] = Str::slug($validated['name']);

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('clients', 'public');
            $validated['image'] = $path;
        }

        // Calculate expiry date based on billing cycle
        $billingCycles = [
            'monthly' => 1,
            'quarterly' => 3,
            'semi-annually' => 6,
            'annually' => 12,
        ];

        $validated['expiry_date'] = now()->addMonths($billingCycles[$validated['billing_cycle']]);

        // Save data
        Client::create($validated);

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        $client->load(['activities' => function ($query) {
            $query->latest()->with('causer')->limit(5);
        }]);

        return view('dashboard.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('dashboard.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'domain' => ['required', 'string', 'max:255', Rule::unique('clients')->ignore($client->id)],
            'type' => 'required|string|max:255',
            'status' => ['required', Rule::in(['active', 'inactive', 'suspended'])],
            'billing_cycle' => ['required', Rule::in(['monthly', 'quarterly', 'semi-annually', 'annually'])],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => ['required', 'email', 'max:255', Rule::unique('clients')->ignore($client->id)],
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string',
        ]);

        // Update slug if client name changed
        if ($client->name !== $validated['name']) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($client->image) {
                Storage::disk('public')->delete($client->image);
            }

            $path = $request->file('image')->store('clients', 'public');
            $validated['image'] = $path;
        }

        // Update client data
        $client->update($validated);

        // Update expiry date if billing cycle changed
        if ($client->wasChanged('billing_cycle')) {
            $billingCycles = [
                'monthly' => 1,
                'quarterly' => 3,
                'semi-annually' => 6,
                'annually' => 12,
            ];

            $client->expiry_date = now()->addMonths($billingCycles[$validated['billing_cycle']]);
            $client->save();
        }

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        abort_if(!$client, 404, "Client not found");

        // Delete client image if exists
        if ($client->image) {
            Storage::disk('public')->delete($client->image);
        }

        $client->delete();

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client deleted successfully.');
    }
}
