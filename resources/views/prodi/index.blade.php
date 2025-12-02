@extends('layouts.app')

@section('title', 'Info Prodi - Prodi Penmas IKIP Siliwangi')
@section('page-title', 'Informasi Program Studi')
@section('page-subtitle', 'Visi, Misi, Tujuan dan Sejarah')

@section('content')
    <div class="space-y-12">
        <!-- Visi Section -->
        <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl border border-teal-100/50 overflow-hidden">
            <div class="bg-gradient-to-r from-teal-600 to-emerald-600 px-8 py-6">
                <h3 class="text-2xl font-bold text-white flex items-center gap-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    Visi
                </h3>
            </div>
            <div class="p-8">
                <p class="text-xl text-slate-700 leading-relaxed font-medium text-center italic">
                    "{{ $prodi->visi }}"
                </p>
            </div>
        </div>

        <!-- Misi & Tujuan Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Misi -->
            <div
                class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl border border-teal-100/50 overflow-hidden flex flex-col h-full">
                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-8 py-6">
                    <h3 class="text-xl font-bold text-white flex items-center gap-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        Misi
                    </h3>
                </div>
                <div class="p-8 flex-1">
                    <ul class="space-y-4">
                        @foreach($prodi->misi as $misi)
                            <li class="flex gap-4">
                                <span
                                    class="flex-shrink-0 w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-sm">
                                    {{ $misi->urutan }}
                                </span>
                                <p class="text-slate-700 leading-relaxed">{{ $misi->deskripsi }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Tujuan -->
            <div
                class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl border border-teal-100/50 overflow-hidden flex flex-col h-full">
                <div class="bg-gradient-to-r from-purple-600 to-pink-600 px-8 py-6">
                    <h3 class="text-xl font-bold text-white flex items-center gap-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Tujuan
                    </h3>
                </div>
                <div class="p-8 flex-1">
                    <ul class="space-y-4">
                        @foreach($prodi->tujuan as $tujuan)
                            <li class="flex gap-4">
                                <span
                                    class="flex-shrink-0 w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center font-bold text-sm">
                                    {{ $tujuan->urutan }}
                                </span>
                                <p class="text-slate-700 leading-relaxed">{{ $tujuan->deskripsi }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Sejarah Section -->
        <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl border border-teal-100/50 overflow-hidden">
            <div class="bg-gradient-to-r from-amber-500 to-orange-600 px-8 py-6">
                <h3 class="text-xl font-bold text-white flex items-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Sejarah
                </h3>
            </div>
            <div class="p-8">
                <div class="prose prose-slate max-w-none">
                    <p class="text-slate-700 leading-loose text-lg text-justify">
                        {{ $prodi->sejarah }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection