<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <x-icon name="cross" />
    </button>
    <div>
        <x-sidebar-logo/>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li class="dropdown">
                <x-menu icon="dashboard" label="Dashboard" />
                <x-submenu :items="[
                    ['route' => route('admin.dashboard'), 'color' => 'text-primary-600', 'label' => 'AI'],
                    ['route' => route('admin.dashboard.crm'), 'color' => 'text-primary-600', 'label' => 'CRM'],
                    ['route' => route('admin.dashboard.ecommerce'), 'color' => 'text-warning-600', 'label' => 'eCommerce'],
                    ['route' => route('admin.dashboard.crypto-currency'), 'color' => 'text-info-600', 'label' => 'Crypto Currency'],
                    ['route' => route('admin.dashboard.investment'), 'color' => 'text-danger-600', 'label' => 'Investment'],
                    ['route' => route('admin.dashboard.lms'), 'color' => 'text-success-600', 'label' => 'LMS'],
                    ['route' => route('admin.dashboard.nft'), 'color' => 'text-danger-600', 'label' => 'NFT & Gaming'],
                ]"/>
            </li>
            <x-menu-title title="Application" />
            <li>
                <x-menu route="{{ route('admin.email') }}" icon="email" label="Email" />
            </li>
            <li>
                <x-menu route="{{ route('admin.chat-message') }}" icon="chat" label="Chat" />
            </li>
            <li>
                <x-menu route="{{ route('admin.calendar') }}" icon="calendar" label="Calendar" />
            </li>
            <li>
                <x-menu route="{{ route('admin.kanban') }}" icon="kanban" label="Kanban" />
            </li>
            <li class="dropdown">
                <x-menu icon="invoice" label="Invoice" />
                <x-submenu :items="[
                    ['route' => route('admin.invoice.list'), 'color' => 'text-primary-600', 'label' => 'List'],
                    ['route' => route('admin.invoice.preview'), 'color' => 'text-warning-600', 'label' => 'Preview'],
                    ['route' => route('admin.invoice.add'), 'color' => 'text-info-600', 'label' => 'Add New'],
                    ['route' => route('admin.invoice.edit'), 'color' => 'text-danger-600', 'label' => 'Edit'],
                ]" />
            </li>
            <li class="dropdown">
                <x-menu icon="ai" label="Ai Application" />
                <x-submenu :items="[
                    ['route' => route('admin.ai-application.text-generator'), 'color' => 'text-primary-600', 'label' => 'Text Generator'],
                    ['route' => route('admin.ai-application.code-generator'), 'color' => 'text-warning-600', 'label' => 'Code Generator'],
                    ['route' => route('admin.ai-application.image-generator'), 'color' => 'text-info-600', 'label' => 'Image Generator'],
                    ['route' => route('admin.ai-application.voice-generator'), 'color' => 'text-danger-600', 'label' => 'Voice Generator'],
                    ['route' => route('admin.ai-application.video-generator'), 'color' => 'text-success-600', 'label' => 'Video Generator'],
                ]" />
            </li>

            <li class="dropdown">
                <x-menu icon="crypto" label="Crypto Currency" />
                <x-submenu :items="[
                    ['route' => route('admin.crypto-currency.wallet'), 'color' => 'text-primary-600', 'label' => 'Wallet'],
                ]" />
            </li>

            <x-menu-title title="UI Elements" />

            <li class="dropdown">
                <x-menu icon="document" label="Components" />
                <x-submenu :items="[
                    ['route' => route('admin.component.typography'), 'color' => 'text-primary-600', 'label' => 'Typography'],
                    ['route' => route('admin.component.colors'), 'color' => 'text-warning-600', 'label' => 'Colors'],
                    ['route' => route('admin.component.button'), 'color' => 'text-success-600', 'label' => 'Button'],
                    ['route' => route('admin.component.dropdown'), 'color' => 'text-purple-600 dark:text-purple-400', 'label' => 'Dropdown'],
                    ['route' => route('admin.component.alert'), 'color' => 'text-warning-600', 'label' => 'Alerts'],
                    ['route' => route('admin.component.card'), 'color' => 'text-danger-600', 'label' => 'Card'],
                    ['route' => route('admin.component.carousel'), 'color' => 'text-info-600', 'label' => 'Carousel'],
                    ['route' => route('admin.component.avatar'), 'color' => 'text-success-600', 'label' => 'Avatars'],
                    ['route' => route('admin.component.progress'), 'color' => 'text-primary-600', 'label' => 'Progress bar'],
                    ['route' => route('admin.component.tabs'), 'color' => 'text-warning-600', 'label' => 'Tab & Accordion'],
                    ['route' => route('admin.component.pagination'), 'color' => 'text-danger-600', 'label' => 'Pagination'],
                    ['route' => route('admin.component.badges'), 'color' => 'text-info-600', 'label' => 'Badges'],
                    ['route' => route('admin.component.tooltip'), 'color' => 'dark:text-purple-400', 'label' => 'Tooltip & Popover'],
                    ['route' => route('admin.component.videos'), 'color' => 'text-cyan-600', 'label' => 'Videos'],
                    ['route' => route('admin.component.star-rating'), 'color' => 'text-[#7f27ff]', 'label' => 'Star Ratings'],
                    ['route' => route('admin.component.tags'), 'color' => 'text-[#8252e9]', 'label' => 'Tags'],
                    ['route' => route('admin.component.list'), 'color' => 'text-[#e30a0a]', 'label' => 'List'],
                    ['route' => route('admin.component.radio'), 'color' => 'text-orange-500', 'label' => 'Radio'],
                    ['route' => route('admin.component.switch'), 'color' => 'text-pink-600', 'label' => 'Switch'],
                    ['route' => route('admin.component.image-upload'), 'color' => 'text-primary-600', 'label' => 'Upload'],
                ]" />
            </li>
            <li class="dropdown">
                <x-menu icon="file" label="Forms" />
                <x-submenu :items="[
                    ['route' => route('admin.form'), 'color' => 'text-primary-600', 'label' => 'Input Forms'],
                    ['route' => route('admin.form.layout'), 'color' => 'text-warning-600', 'label' => 'Input Layout'],
                    ['route' => route('admin.form.validation'), 'color' => 'text-success-600', 'label' => 'Form Validation'],
                    ['route' => route('admin.form.wizard'), 'color' => 'text-danger-600', 'label' => 'Form Wizard'],
                ]" />
            </li>
            <li class="dropdown">
                <x-menu icon="storage" label="Table" />
                <x-submenu :items="[
                    ['route' => route('admin.table.basic'), 'color' => 'text-primary-600', 'label' => 'Basic Table'],
                    ['route' => route('admin.table.data'), 'color' => 'text-warning-600', 'label' => 'Data Table'],
                ]" />
            </li>
            <li class="dropdown">
                <x-menu icon="chart" label="Chart" />
                <x-submenu :items="[
                    ['route' => route('admin.chart.line'), 'color' => 'text-danger-600', 'label' => 'Line Chart'],
                    ['route' => route('admin.chart.column'), 'color' => 'text-warning-600', 'label' => 'Column Chart'],
                    ['route' => route('admin.chart.pie'), 'color' => 'text-success-600', 'label' => 'Pie Chart'],
                ]" />
            </li>
            <li>
                <x-menu route="{{ route('admin.widget') }}" icon="vector" label="Widgets" />
            </li>
            <li class="dropdown">
                <x-menu icon="user-group" label="Users" />
                <x-submenu :items="[
                    ['route' => route('admin.user.list'), 'color' => 'text-primary-600', 'label' => 'Users List'],
                    ['route' => route('admin.user.grid'), 'color' => 'text-warning-600', 'label' => 'Users Grid'],
                    ['route' => route('admin.user.add'), 'color' => 'text-info-600', 'label' => 'Add User'],
                    ['route' => route('admin.user.view-profile'), 'color' => 'text-danger-600', 'label' => 'View Profile'],
                ]" />
            </li>

            <x-menu-title title="Others" />

            <li class="dropdown">
                <x-menu icon="simple-vector" label="Authentication" />
                <x-submenu :items="[
                    ['route' => route('admin.authentication.sign-in'), 'color' => 'text-primary-600', 'label' => 'Sign In'],
                    ['route' => route('admin.authentication.sign-up'), 'color' => 'text-warning-600', 'label' => 'Sign Up'],
                    ['route' => route('admin.authentication.forgot-password'), 'color' => 'text-info-600', 'label' => 'Forgot Password'],
                ]" />
            </li>
            <li>
                <x-menu route="{{ route('admin.gallery') }}" icon="gallery" label="Gallery" />
            </li>
            <li>
                <x-menu route="{{ route('admin.pricing') }}" icon="money" label="Pricing" />
            </li>
            <li>
                <x-menu route="{{ route('admin.faqs') }}" icon="faqs" label="FAQs." />
            </li>
            <li>
                <x-menu route="{{ route('admin.error') }}" icon="straight-face" label="404" />
            </li>
            <li>
                <x-menu route="{{ route('admin.terms-condition') }}" icon="info" label="Terms & Conditions" />
            </li>
            <li class="dropdown">
                <x-menu icon="setting" label="Settings" />
                <x-submenu :items="[
                    ['route' => route('admin.setting.company'), 'color' => 'text-primary-600', 'label' => 'Company'],
                    ['route' => route('admin.setting.notification'), 'color' => 'text-warning-600', 'label' => 'Notification'],
                    ['route' => route('admin.setting.notification-alert'), 'color' => 'text-info-600', 'label' => 'Notification Alert'],
                    ['route' => route('admin.setting.theme'), 'color' => 'text-danger-600', 'label' => 'Theme'],
                    ['route' => route('admin.setting.currencies'), 'color' => 'text-danger-600', 'label' => 'Currencies'],
                    ['route' => route('admin.setting.language'), 'color' => 'text-danger-600', 'label' => 'Languages'],
                    ['route' => route('admin.setting.payment-gateway'), 'color' => 'text-danger-600', 'label' => 'Payment Gateway'],
                ]" />
            </li>
        </ul>
    </div>
</aside>
