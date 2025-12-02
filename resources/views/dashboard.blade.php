@extends('layouts.app')

@section('title', 'Dashboard - Prodi Penmas IKIP Siliwangi')
@section('page-title', 'Dashboard')
@section('page-subtitle', 'Selamat datang di Sistem Informasi Prodi Pendidikan Masyarakat')

@section('content')
    <!-- Hero Section -->
    <div
        class="mb-8 bg-gradient-to-r from-teal-600 to-emerald-600 rounded-3xl shadow-2xl shadow-teal-500/30 overflow-hidden">
        <div class="px-12 py-16 text-white relative">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -mr-48 -mt-48"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full -ml-32 -mb-32"></div>

            <div class="relative z-10">
                <h1 class="text-5xl font-bold mb-4">{{ $prodi->institusi ?? 'IKIP Siliwangi' }}</h1>
                <h2 class="text-3xl font-semibold mb-6">{{ $prodi->nama_prodi ?? 'Pendidikan Masyarakat' }}</h2>
                <div class="flex items-center gap-4">
                    <span
                        class="bg-white/20 backdrop-blur-sm px-6 py-2 rounded-full text-sm font-medium">{{ $prodi->fakultas ?? 'Fakultas Ilmu Pendidikan' }}</span>
                    <span class="bg-yellow-400 text-yellow-900 px-6 py-2 rounded-full text-sm font-bold shadow-lg">
                        🏆 Akreditasi: {{ $prodi->akreditasi ?? 'UNGGUL' }}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <!-- Total Dosen -->
        <div class="stat-card bg-gradient-to-br from-blue-500 to-blue-600">
            <div class="stat-icon">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <div>
                <p class="stat-label">Total Dosen</p>
                <p class="stat-value">{{ $stats['total_dosen'] }}</p>
            </div>
        </div>

        <!-- Total Mahasiswa -->
        <div class="stat-card bg-gradient-to-br from-emerald-500 to-emerald-600">
            <div class="stat-icon">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>
            </div>
            <div>
                <p class="stat-label">Total Mahasiswa</p>
                <p class="stat-value">{{ $stats['total_mahasiswa'] }}</p>
            </div>
        </div>

        <!-- Total Mata Kuliah -->
        <div class="stat-card bg-gradient-to-br from-purple-500 to-purple-600">
            <div class="stat-icon">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <div>
                <p class="stat-label">Mata Kuliah</p>
                <p class="stat-value">{{ $stats['total_mata_kuliah'] }}</p>
            </div>
        </div>

        <!-- Total Jadwal -->
        <div class="stat-card bg-gradient-to-br from-amber-500 to-amber-600">
            <div class="stat-icon">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
            <div>
                <p class="stat-label">Jadwal Kuliah</p>
                <p class="stat-value">{{ $stats['total_jadwal'] }}</p>
            </div>
        </div>
    </div>

    <!-- Quick Links -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Info Prodi -->
        <a href="{{ route('prodi.index') }}" class="quick-link-card group">
            <div class="flex items-start justify-between">
                <div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2 group-hover:text-teal-600 transition-colors">Informasi
                        Prodi</h3>
                    <p class="text-sm text-slate-600">Lihat visi, misi, tujuan dan akreditasi</p>
                </div>
                <div
                    class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center group-hover:bg-teal-500 group-hover:scale-110 transition-all">
                    <svg class="w-6 h-6 text-teal-600 group-hover:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
        </a>

        <!-- Dosen -->
        <a href="{{ route('dosen.index') }}" class="quick-link-card group">
            <div class="flex items-start justify-between">
                <div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2 group-hover:text-emerald-600 transition-colors">Data
                        Dosen</h3>
                    <p class="text-sm text-slate-600">Daftar dosen pengajar prodi</p>
                </div>
                <div
                    class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center group-hover:bg-emerald-500 group-hover:scale-110 transition-all">
                    <svg class="w-6 h-6 text-emerald-600 group-hover:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
        </a>

        <!-- Mahasiswa -->
        <a href="{{ route('mahasiswa.index') }}" class="quick-link-card group">
            <div class="flex items-start justify-between">
                <div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2 group-hover:text-blue-600 transition-colors">Data
                        Mahasiswa</h3>
                    <p class="text-sm text-slate-600">Daftar mahasiswa aktif</p>
                </div>
                <div
                    class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center group-hover:bg-blue-500 group-hover:scale-110 transition-all">
                    <svg class="w-6 h-6 text-blue-600 group-hover:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
            </div>
        </a>

        <!-- Mata Kuliah -->
        <a href="{{ route('mata-kuliah.index') }}" class="quick-link-card group">
            <div class="flex items-start justify-between">
                <div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2 group-hover:text-purple-600 transition-colors">Mata
                        Kuliah</h3>
                    <p class="text-sm text-slate-600">Daftar mata kuliah tersedia</p>
                </div>
                <div
                    class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center group-hover:bg-purple-500 group-hover:scale-110 transition-all">
                    <svg class="w-6 h-6 text-purple-600 group-hover:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
            </div>
        </a>

        <!-- Jadwal -->
        <a href="{{ route('jadwal.index') }}" class="quick-link-card group">
            <div class="flex items-start justify-between">
                <div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2 group-hover:text-amber-600 transition-colors">Jadwal
                        Kuliah</h3>
                    <p class="text-sm text-slate-600">Lihat jadwal perkuliahan</p>
                </div>
                <div
                    class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center group-hover:bg-amber-500 group-hover:scale-110 transition-all">
                    <svg class="w-6 h-6 text-amber-600 group-hover:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>
        </a>
    </div>

    <style>
        .stat-card {
            @apply p-6 rounded-2xl shadow-lg text-white flex items-center gap-4 transform hover:scale-105 transition-all duration-300;
        }

        .stat-icon {
            @apply w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center shrink-0;
        }

        .stat-label {
            @apply text-sm font-medium opacity-90;
        }

        .stat-value {
            @apply text-3xl font-bold mt-1;
        }

        .quick-link-card {
            @apply block p-6 bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg border border-slate-200/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300;
        }
    </style>
@endsection