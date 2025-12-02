@extends('layouts.app')

@section('title', 'Jadwal Kuliah - Prodi Penmas IKIP Siliwangi')
@section('page-title', 'Jadwal Kuliah')
@section('page-subtitle', 'Jadwal Perkuliahan Semester Ganjil 2025-2026')

@section('content')
    <div class="space-y-8">
        <!-- Filter Section -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg border border-teal-100/50 p-6">
            <form action="{{ route('jadwal.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Hari</label>
                    <select name="hari" onchange="this.form.submit()"
                        class="w-full px-4 py-2 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all">
                        <option value="">Semua Hari</option>
                        @foreach($hariList as $h)
                            <option value="{{ $h }}" {{ $hari == $h ? 'selected' : '' }}>{{ $h }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Angkatan</label>
                    <select name="angkatan" onchange="this.form.submit()"
                        class="w-full px-4 py-2 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all">
                        <option value="">Semua Angkatan</option>
                        @foreach($angkatanList as $a)
                            <option value="{{ $a }}" {{ $angkatan == $a ? 'selected' : '' }}>{{ $a }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Kelas</label>
                    <select name="kelas" onchange="this.form.submit()"
                        class="w-full px-4 py-2 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all">
                        <option value="">Semua Kelas</option>
                        <option value="Reguler" {{ $kelas == 'Reguler' ? 'selected' : '' }}>Reguler</option>
                        <option value="Karyawan" {{ $kelas == 'Karyawan' ? 'selected' : '' }}>Karyawan</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <a href="{{ route('jadwal.index') }}"
                        class="w-full px-4 py-2 bg-slate-100 text-slate-600 rounded-xl hover:bg-slate-200 transition-colors text-center font-medium">
                        Reset Filter
                    </a>
                </div>
            </form>
        </div>

        <!-- Schedule Grid -->
        <div class="grid grid-cols-1 gap-8">
            @forelse($jadwalByHari as $namaHari => $jadwalHari)
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl border border-teal-100/50 overflow-hidden">
                    <div class="bg-gradient-to-r from-teal-600 to-emerald-600 px-6 py-4 flex justify-between items-center">
                        <h3 class="text-xl font-bold text-white flex items-center gap-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ $namaHari }}
                        </h3>
                        <span class="bg-white/20 text-white px-3 py-1 rounded-full text-sm font-medium">
                            {{ $jadwalHari->count() }} Mata Kuliah
                        </span>
                    </div>

                    <div class="divide-y divide-slate-100">
                        @foreach($jadwalHari as $j)
                            <div class="p-6 hover:bg-slate-50/50 transition-colors group">
                                <div class="flex flex-col md:flex-row gap-6">
                                    <!-- Time Column -->
                                    <div class="md:w-48 flex-shrink-0">
                                        <div class="flex items-center gap-2 text-slate-800 font-bold text-lg">
                                            <svg class="w-5 h-5 text-teal-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            {{ \Carbon\Carbon::parse($j->waktu_mulai)->format('H:i') }} -
                                            {{ \Carbon\Carbon::parse($j->waktu_selesai)->format('H:i') }}
                                        </div>
                                        <div class="mt-2 flex flex-wrap gap-2">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                {{ $j->angkatan }}
                                            </span>
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                {{ $j->kelas }}
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Course Info -->
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-slate-800 group-hover:text-teal-600 transition-colors">
                                            {{ $j->mataKuliah->nama }}
                                        </h4>
                                        <div class="flex items-center gap-2 mt-1 text-sm text-slate-500">
                                            <span
                                                class="font-mono bg-slate-100 px-2 py-0.5 rounded text-xs">{{ $j->mataKuliah->kode }}</span>
                                            <span>•</span>
                                            <span>{{ $j->mataKuliah->sks }} SKS</span>
                                        </div>

                                        <div class="mt-4 flex flex-col sm:flex-row sm:items-center gap-4">
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs font-bold text-slate-600">
                                                    {{ substr($j->dosen->nama, 0, 1) }}
                                                </div>
                                                <div class="text-sm font-medium text-slate-700">
                                                    {{ $j->dosen->nama }}
                                                </div>
                                            </div>

                                            <div
                                                class="flex items-center gap-2 text-sm text-slate-600 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-100">
                                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                                </svg>
                                                Ruang: <span
                                                    class="font-bold {{ $j->ruangan->nama == 'Online' ? 'text-green-600' : 'text-slate-800' }}">{{ $j->ruangan->nama }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @empty
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl border border-teal-100/50 p-12 text-center">
                    <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Tidak ada jadwal ditemukan</h3>
                    <p class="text-slate-500">Coba ubah filter pencarian Anda atau pilih hari lain.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection