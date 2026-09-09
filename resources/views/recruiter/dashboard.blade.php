<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recruiter Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-6">
                        Post new jobs, manage your listings, and connect with qualified candidates.
                    </p>

                    @if (session('success'))
                        <div class="mb-6 rounded-md bg-green-50 p-4 text-sm text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <!-- Post a Job -->
                        <div class="lg:col-span-2 border border-gray-200 rounded-lg p-6">
                            <h3 class="text-lg font-semibold mb-4">Post a New Job</h3>

                            <form method="POST" action="{{ route('recruiter.jobs.store') }}" class="space-y-4">
                                @csrf

                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
                                    <input id="title" name="title" type="text" required
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                           value="{{ old('title') }}">
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                                        <input id="category" name="category" type="text" required
                                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                               value="{{ old('category') }}">
                                    </div>
                                    <div>
                                        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                                        <input id="location" name="location" type="text" required
                                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                               value="{{ old('location') }}">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="type" class="block text-sm font-medium text-gray-700">Job Type</label>
                                        <input id="type" name="type" type="text" required
                                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                               value="{{ old('type') }}">
                                    </div>
                                    <div>
                                        <label for="onsite" class="block text-sm font-medium text-gray-700">Work Mode</label>
                                        <input id="onsite" name="onsite" type="text"
                                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                               value="{{ old('onsite', 'Onsite') }}">
                                    </div>
                                </div>

                                <div>
                                    <label for="job_purpose" class="block text-sm font-medium text-gray-700">Job Purpose</label>
                                    <textarea id="job_purpose" name="job_purpose" rows="2" required
                                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('job_purpose') }}</textarea>
                                </div>

                                <div>
                                    <label for="key_responsibilities" class="block text-sm font-medium text-gray-700">Key Responsibilities <span class="text-gray-400">(one per line)</span></label>
                                    <textarea id="key_responsibilities" name="key_responsibilities" rows="4" required
                                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('key_responsibilities') }}</textarea>
                                </div>

                                <div>
                                    <label for="detailed_qualifications" class="block text-sm font-medium text-gray-700">Qualifications <span class="text-gray-400">(one per line)</span></label>
                                    <textarea id="detailed_qualifications" name="detailed_qualifications" rows="4" required
                                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('detailed_qualifications') }}</textarea>
                                </div>

                                <div>
                                    <label for="skills" class="block text-sm font-medium text-gray-700">Skills <span class="text-gray-400">(comma separated)</span></label>
                                    <input id="skills" name="skills" type="text" required
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                           value="{{ old('skills') }}">
                                </div>

                                <div class="flex justify-end">
                                    <x-primary-button class="ms-3">
                                        {{ __('Post Job') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>

                        <!-- Summary -->
                        <div class="border border-gray-200 rounded-lg p-6">
                            <h3 class="text-lg font-semibold mb-4">Your Account</h3>
                            <dl class="space-y-3 text-sm">
                                <div>
                                    <dt class="text-gray-500">Name</dt>
                                    <dd class="font-medium text-gray-900">{{ Auth::user()->name }}</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-500">Email</dt>
                                    <dd class="font-medium text-gray-900">{{ Auth::user()->email }}</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-500">Role</dt>
                                    <dd class="font-medium text-gray-900 capitalize">Recruiter / Employer</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>