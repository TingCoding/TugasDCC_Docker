@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1 class="text-4xl font-bold">Laravel Basic App</h1>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold">Dokumentasi</div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Laravel memiliki dokumentasi yang luar biasa dan komprehensif yang mencakup setiap aspek dari framework. Baik Anda baru memulai atau sudah berpengalaman dengan Laravel, kami menyarankan membaca dokumentasi resmi.
                        </div>
                    </div>
                </div>

                <br>
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <div class="flex items-center">

                        <div class="ml-4 text-lg leading-7 font-semibold">Dashboard</div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Silakan masuk ke <a href="{{ route('dashboard') }}" class="underline text-gray-900 dark:text-white">dashboard</a> untuk melihat tampilan sederhana dari aplikasi ini. Anda dapat mengembangkan halaman ini sesuai dengan kebutuhan aplikasi Anda.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">
                    Laravel Basic App - Created with Docker
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</div>
@endsection