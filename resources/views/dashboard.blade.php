@livewireStyles
@livewireScripts

<x-layout>
    <x-slot:heading>
        Dashboard
    </x-slot:heading>
    <div class="flex min-h-screen bg-white" x-data="{ activeTab: 'dashboard' }">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-100 p-4 border-r">
            <div class="mb-8">
                <h1 class="text-xl font-bold">Leadminer</h1>
            </div>
            <nav class="space-y-2">
                <div class="text-gray-500 text-sm mb-2">Superadmin</div>
                <a href="#" class="block p-2 hover:bg-gray-200 rounded" 
                   :class="{'font-semibold': activeTab === 'dashboard'}" 
                   x-on:click.prevent="activeTab = 'dashboard'">
                    Dashboard
                </a>
                <a href="#" class="block p-2 hover:bg-gray-200 rounded" 
                   :class="{'font-semibold': activeTab === 'leads'}" 
                   x-on:click.prevent="activeTab = 'leads'">
                    Leads
                </a>
                <a href="#" class="block p-2 hover:bg-gray-200 rounded" 
                   :class="{'font-semibold': activeTab === 'contacts'}" 
                   x-on:click.prevent="activeTab = 'contacts'">
                    Contacts
                </a>
                <a href="#" class="block p-2 hover:bg-gray-200 rounded" 
                   :class="{'font-semibold': activeTab === 'company'}" 
                   x-on:click.prevent="activeTab = 'company'">
                    Company
                </a>
                <a href="#" class="block p-2 hover:bg-gray-200 rounded" 
                   :class="{'font-semibold': activeTab === 'affiliates'}" 
                   x-on:click.prevent="activeTab = 'affiliates'">
                    Affiliates
                </a>
                <a href="#" class="block p-2 hover:bg-gray-200 rounded" 
                   :class="{'font-semibold': activeTab === 'affiliatesmgt'}" 
                   x-on:click.prevent="activeTab = 'affiliatesmgt'">
                    Management
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
                <!-- Dashboard Content -->
                <div x-show="activeTab === 'dashboard'" class="transition-opacity duration-200">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">Credit</h2>
                        <div class="relative w-96">
                            <input type="search" placeholder="Search lead, contact, and more." 
                                class="w-full pl-10 pr-4 py-2 border rounded-lg">
                            <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-400" 
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Filters and Credit Section -->
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 border rounded-md text-blue-600 border-blue-600">All</button>
                            <button class="px-4 py-2 border rounded-md text-gray-600">Web Download</button>
                            <button class="px-4 py-2 border rounded-md text-gray-600">Online Store</button>
                        </div>
                        <div class="flex items-center space-x-4">
                            <!-- Display Remaining Credits -->
                            <div class="text-gray-600">
                                Credits: <span id="credit-balance">{{ $credits ?? 0 }}</span>
                            </div>
                            <!-- Add Credits Button -->
                            <button id="add-credits-btn" class="px-4 py-2 bg-blue-600 text-white rounded-md">
                                Add Credits
                            </button>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto rounded-lg border mt-4">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Name of company</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Email</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Phone</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Lead Source</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Category</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Lead Owner</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y">
                                <!-- Sample Row - Repeat for each entry -->
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">Guy Hawkins</td>
                                    <td class="px-6 py-4">hawkins32@gmail.com</td>
                                    <td class="px-6 py-4">+6289576568773</td>
                                    <td class="px-6 py-4">Web Download</td>
                                    <td class="px-6 py-4">Large Enterprise</td>
                                    <td class="px-6 py-4">Brooklyn Simmons</td>
                                </tr>
                                <!-- Repeat other rows similarly -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-between items-center mt-4">
                        <div class="text-gray-600">Showing 20 of 60 results</div>
                        <div class="flex space-x-4">
                            <select class="border rounded-md px-2 py-1">
                                <option>20</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Leads Content -->
                <div x-show="activeTab === 'leads'" class="transition-opacity duration-200">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">Search </h2>
                    </div>

                    <!-- Search & Scrape Form -->
                    <div class="mb-6">
                        <form id="search-form" class="bg-white p-6 rounded-lg shadow-md">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Category -->
                                <div>
                                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                                    <input type="text" id="category" name="category" placeholder="e.g., Restaurants" 
                                        class="mt-1 block w-full p-2 border rounded-md">
                                </div>
                                <!-- Location -->
                                <div>
                                    <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                                    <input type="text" id="location" name="location" placeholder="e.g., New York, NY" 
                                        class="mt-1 block w-full p-2 border rounded-md">
                                </div>
                                <!-- Division -->
                                <div>
                                    <label for="division" class="block text-sm font-medium text-gray-700">Division</label>
                                    <input type="text" id="division" name="division" placeholder="e.g., Manhattan" 
                                        class="mt-1 block w-full p-2 border rounded-md">
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">
                                    Search & Scrape
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Scraped Data Output -->
                    <div class="overflow-x-auto rounded-lg border">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Name</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Website</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Phone</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Address</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Rating</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Price Range</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Working Hours</th>
                                </tr>
                            </thead>
                            <tbody id="scraped-data" class="divide-y">                   
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-between items-center mt-4">
                        <div class="text-gray-600">Showing <span id="result-count">0</span> results</div>
                        <div class="flex space-x-4">
                            <select class="border rounded-md px-2 py-1">
                                <option>20</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Contacts Content -->
                <div x-show="activeTab === 'contacts'" class="transition-opacity duration-200">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">User Management</h2>
                        <button id="add-user-btn" class="px-4 py-2 bg-blue-600 text-white rounded-md">
                            Add User
                        </button>
                    </div>

                    <!-- User List -->
                    <div class="overflow-x-auto rounded-lg border">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Name</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Email</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Credits</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Affiliate Link</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="user-list" class="divide-y">
                            </tbody>
                        </table>
                    </div>

                    <!-- Add User Modal -->
                    <div id="add-user-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
                        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                            <div class="mt-3 text-center">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Add User</h3>
                                <form id="add-user-form" class="mt-2">
                                    <input type="text" name="name" placeholder="Name" class="mt-2 p-2 border rounded-md w-full">
                                    <input type="email" name="email" placeholder="Email" class="mt-2 p-2 border rounded-md w-full">
                                    <input type="password" name="password" placeholder="Password" class="mt-2 p-2 border rounded-md w-full">
                                    <div class="mt-4">
                                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">
                                            Save
                                        </button>
                                        <button type="button" id="close-modal-btn" class="px-4 py-2 bg-gray-500 text-white rounded-md ml-2">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Company Content -->
                <div x-show="activeTab === 'company'" class="transition-opacity duration-200">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">Contacts</h2>
                        <div class="relative w-96">
                            <input type="search" placeholder="Search lead, contact, and more." 
                                class="w-full pl-10 pr-4 py-2 border rounded-lg">
                            <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-400" 
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Filters and Export Section -->
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 border rounded-md text-blue-600 border-blue-600">All</button>
                            <button class="px-4 py-2 border rounded-md text-gray-600">Web Download</button>
                            <button class="px-4 py-2 border rounded-md text-gray-600">Online Store</button>
                        </div>
                        <div class="flex space-x-2">
                            <button id="export-csv-btn" class="px-4 py-2 bg-green-600 text-white rounded-md">
                                Export as CSV
                            </button>
                            <button id="export-excel-btn" class="px-4 py-2 bg-blue-600 text-white rounded-md">
                                Export as Excel
                            </button>
                            <button id="export-pdf-btn" class="px-4 py-2 bg-red-600 text-white rounded-md">
                                Export as PDF
                            </button>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto rounded-lg border">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Name of company</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Email</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Phone</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Lead Source</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Category</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Lead Owner</th>
                                </tr>
                            </thead>
                            <tbody id="scraped-data" class="divide-y">
                                <!-- Scraped data will be dynamically inserted here -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-between items-center mt-4">
                        <div class="text-gray-600">Showing 20 of 60 results</div>
                        <div class="flex space-x-4">
                            <select class="border rounded-md px-2 py-1">
                                <option>20</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                        </div>
                    </div>
                </div>
                

                <!-- Affiliates Content -->
                <div x-show="activeTab === 'affiliates'" class="transition-opacity duration-200">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">Advanced Features</h2>
                    </div>

                    <!-- Real-Time Data Preview -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-4">Real-Time Data Preview</h3>
                        <form id="preview-form" class="bg-white p-6 rounded-lg shadow-md">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Category -->
                                <div>
                                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                                    <input type="text" id="category" name="category" placeholder="e.g., Restaurants" 
                                        class="mt-1 block w-full p-2 border rounded-md">
                                </div>
                                <!-- Location -->
                                <div>
                                    <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                                    <input type="text" id="location" name="location" placeholder="e.g., New York, NY" 
                                        class="mt-1 block w-full p-2 border rounded-md">
                                </div>
                                <!-- Max Results -->
                                <div>
                                    <label for="max-results" class="block text-sm font-medium text-gray-700">Max Results</label>
                                    <input type="number" id="max-results" name="max_results" placeholder="e.g., 10" 
                                        class="mt-1 block w-full p-2 border rounded-md">
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">
                                    Preview Data
                                </button>
                            </div>
                        </form>
                        <div id="preview-results" class="mt-4">
                            <!-- Preview results will be dynamically inserted here -->
                        </div>
                    </div>

                    <!-- Scraping Alerts -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-4">Scraping Alerts</h3>
                        <form id="alert-form" class="bg-white p-6 rounded-lg shadow-md">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Query -->
                                <div>
                                    <label for="alert-query" class="block text-sm font-medium text-gray-700">Query</label>
                                    <input type="text" id="alert-query" name="query" placeholder="e.g., Restaurants in New York" 
                                        class="mt-1 block w-full p-2 border rounded-md">
                                </div>
                                <!-- Location -->
                                <div>
                                    <label for="alert-location" class="block text-sm font-medium text-gray-700">Location</label>
                                    <input type="text" id="alert-location" name="location" placeholder="e.g., New York, NY" 
                                        class="mt-1 block w-full p-2 border rounded-md">
                                </div>
                                <!-- Email -->
                                <div>
                                    <label for="alert-email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" id="alert-email" name="email" placeholder="e.g., user@example.com" 
                                        class="mt-1 block w-full p-2 border rounded-md">
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">
                                    Set Alert
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Scheduled Scraping -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-4">Scheduled Scraping</h3>
                        <form id="schedule-form" class="bg-white p-6 rounded-lg shadow-md">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Query -->
                                <div>
                                    <label for="schedule-query" class="block text-sm font-medium text-gray-700">Query</label>
                                    <input type="text" id="schedule-query" name="query" placeholder="e.g., Restaurants in New York" 
                                        class="mt-1 block w-full p-2 border rounded-md">
                                </div>
                                <!-- Location -->
                                <div>
                                    <label for="schedule-location" class="block text-sm font-medium text-gray-700">Location</label>
                                    <input type="text" id="schedule-location" name="location" placeholder="e.g., New York, NY" 
                                        class="mt-1 block w-full p-2 border rounded-md">
                                </div>
                                <!-- Interval -->
                                <div>
                                    <label for="schedule-interval" class="block text-sm font-medium text-gray-700">Interval</label>
                                    <select id="schedule-interval" name="interval" class="mt-1 block w-full p-2 border rounded-md">
                                        <option value="daily">Daily</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">
                                    Schedule Scraping
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Data Cleansing Tools -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-4">Data Cleansing Tools</h3>
                        <form id="clean-form" class="bg-white p-6 rounded-lg shadow-md">
                            <div class="grid grid-cols-1 gap-4">
                                <!-- Data -->
                                <div>
                                    <label for="data" class="block text-sm font-medium text-gray-700">Data</label>
                                    <textarea id="data" name="data" rows="5" placeholder="Paste your scraped data here" 
                                            class="mt-1 block w-full p-2 border rounded-md"></textarea>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">
                                    Clean Data
                                </button>
                            </div>
                        </form>
                        <div id="cleaned-data" class="mt-4">
                            <!-- Cleaned data will be dynamically inserted here -->
                        </div>
                    </div>
                </div>
        

                <!-- Affiliates Management Content -->
                <div x-show="activeTab === 'affiliatesmgt'" class="transition-opacity duration-200">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">Affiliate Management</h2>
                    </div>

                    <!-- Affiliate Link Section -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-4">Your Affiliate Link</h3>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="flex items-center">
                                <input type="text" id="affiliate-link" readonly 
                                    class="flex-1 p-2 border rounded-md" value="Loading...">
                                <button id="copy-link-btn" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-md">
                                    Copy Link
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Affiliate Earnings Section -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-4">Affiliate Earnings</h3>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <p class="text-2xl font-bold text-blue-600" id="affiliate-earnings">Loading...</p>
                        </div>
                    </div>

                    <!-- Referral List -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-4">Referrals</h3>
                        <div class="overflow-x-auto rounded-lg border">
                            <table class="w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Name</th>
                                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Email</th>
                                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Credits Earned</th>
                                    </tr>
                                </thead>
                                <tbody id="referral-list" class="divide-y">
                                    <tr>
                                        <td class="px-6 py-4">Loading...</td>
                                        <td class="px-6 py-4">Loading...</td>
                                        <td class="px-6 py-4">Loading...</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>   
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- JavaScript for Credit Handling -->
    <script>
        // Fetch and display credit balance
        async function fetchCreditBalance() {
            const response = await fetch('/api/user/credits', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                }
            });
            const data = await response.json();
            document.getElementById('credit-balance').textContent = data.credits;
        }

        // Simulate adding credits
        document.getElementById('add-credits-btn').addEventListener('click', async () => {
            const amount = prompt('Enter the number of credits to add:');
            if (amount) {
                const response = await fetch('/api/user/credits/add', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                    },
                    body: JSON.stringify({ amount: parseInt(amount) })
                });
                const data = await response.json();
                document.getElementById('credit-balance').textContent = data.credits;
            }
        });

        // Initialize credit balance on page load
        fetchCreditBalance();
    </script>

    <!-- JavaScript for Search & Scrape -->
    <script>
        document.getElementById('search-form').addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(e.target);
            const query = `${formData.get('category')} in ${formData.get('location')}, ${formData.get('division')}`;

            // Create a scraping task
            const taskResponse = await fetch('/api/scrape', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                },
                body: JSON.stringify({ query, max_results: 50 })
            });
            const taskData = await taskResponse.json();

            // Fetch scraping results
            const resultsResponse = await fetch(`/api/scrape/${taskData.task_id}/results`);
            const resultsData = await resultsResponse.json();

            // Display scraped data
            const scrapedData = document.getElementById('scraped-data');
            scrapedData.innerHTML = resultsData.results.map(result => `
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">${result.name}</td>
                    <td class="px-6 py-4">${result.website}</td>
                    <td class="px-6 py-4">${result.phone}</td>
                    <td class="px-6 py-4">${result.address}</td>
                    <td class="px-6 py-4">${result.rating}</td>
                    <td class="px-6 py-4">${result.price_range}</td>
                    <td class="px-6 py-4">${result.working_hours}</td>
                </tr>
            `).join('');

            // Update result count
            document.getElementById('result-count').textContent = resultsData.results.length;
        });
    </script>

    <!-- JavaScript for Data Export -->
    <script>
        // Export as CSV
        document.getElementById('export-csv-btn').addEventListener('click', async () => {
            const taskId = '12345'; // Replace with actual task ID
            const response = await fetch(`/api/tasks/${taskId}/export`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                },
                body: JSON.stringify({ format: 'csv' })
            });
            const blob = await response.blob();
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'data.csv';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });

        // Export as Excel
        document.getElementById('export-excel-btn').addEventListener('click', async () => {
            const taskId = '12345'; // Replace with actual task ID
            const response = await fetch(`/api/tasks/${taskId}/export`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                },
                body: JSON.stringify({ format: 'excel' })
            });
            const blob = await response.blob();
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'data.xlsx';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });

        // Export as PDF
        document.getElementById('export-pdf-btn').addEventListener('click', async () => {
            const taskId = '12345'; // Replace with actual task ID
            const response = await fetch(`/api/tasks/${taskId}/export`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                },
                body: JSON.stringify({ format: 'pdf' })
            });
            const blob = await response.blob();
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'data.pdf';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });
    </script>

    <!-- JavaScript for Advanced Features -->
    <script>
        // Real-Time Data Preview
        document.getElementById('preview-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            const response = await fetch('/api/tasks/preview', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                },
                body: JSON.stringify({
                    query: formData.get('category') + ' in ' + formData.get('location'),
                    location: formData.get('location'),
                    max_results: formData.get('max_results')
                })
            });
            const data = await response.json();
            const previewResults = document.getElementById('preview-results');
            previewResults.innerHTML = data.results.map(result => `
                <div class="bg-gray-50 p-4 rounded-lg mb-2">
                    <p class="font-semibold">${result.name}</p>
                    <p>${result.address}</p>
                    <p>${result.phone}</p>
                </div>
            `).join('');
        });

        // Scraping Alerts
        document.getElementById('alert-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            const response = await fetch('/api/alerts', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                },
                body: JSON.stringify({
                    query: formData.get('query'),
                    location: formData.get('location'),
                    alert_type: 'new_leads',
                    email: formData.get('email')
                })
            });
            const data = await response.json();
            alert(data.message);
        });

        // Scheduled Scraping
        document.getElementById('schedule-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            const response = await fetch('/api/tasks/schedule', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                },
                body: JSON.stringify({
                    query: formData.get('query'),
                    location: formData.get('location'),
                    interval: formData.get('interval'),
                    max_results: 50
                })
            });
            const data = await response.json();
            alert(data.message);
        });

        // Data Cleansing Tools
        document.getElementById('clean-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            const response = await fetch('/api/data/clean', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                },
                body: JSON.stringify({
                    data: JSON.parse(formData.get('data'))
                })
            });
            const data = await response.json();
            const cleanedData = document.getElementById('cleaned-data');
            cleanedData.innerHTML = data.cleaned_data.map(item => `
                <div class="bg-gray-50 p-4 rounded-lg mb-2">
                    <p class="font-semibold">${item.name}</p>
                    <p>${item.address}</p>
                    <p>${item.phone}</p>
                </div>
            `).join('');
        });
    </script>

    <!-- JavaScript for Affiliate Management -->
    <script>
        // Fetch and display affiliate link
        async function fetchAffiliateLink() {
            const response = await fetch('/api/user/affiliate-link', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                }
            });
            const data = await response.json();
            document.getElementById('affiliate-link').value = data.affiliate_link;
        }

        // Fetch and display affiliate earnings
        async function fetchAffiliateEarnings() {
            const response = await fetch('/api/user/affiliate-earnings', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                }
            });
            const data = await response.json();
            document.getElementById('affiliate-earnings').textContent = `${data.earnings} credits`;
        }

        // Fetch and display referral list
        async function fetchReferralList() {
            const response = await fetch('/api/user/referrals', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_AUTH_TOKEN'
                }
            });
            const data = await response.json();
            const referralList = document.getElementById('referral-list');
            referralList.innerHTML = data.referrals.map(referral => `
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">${referral.name}</td>
                    <td class="px-6 py-4">${referral.email}</td>
                    <td class="px-6 py-4">${referral.credits_earned}</td>
                </tr>
            `).join('');
        }

        // Copy affiliate link to clipboard
        document.getElementById('copy-link-btn').addEventListener('click', () => {
            const affiliateLink = document.getElementById('affiliate-link');
            affiliateLink.select();
            document.execCommand('copy');
            alert('Affiliate link copied to clipboard!');
        });

        // Initialize affiliate management on page load
        fetchAffiliateLink();
        fetchAffiliateEarnings();
        fetchReferralList();
    </script>

</x-layout>