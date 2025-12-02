@extends('layouts.app')

@section('title', 'Mata Kuliah - Prodi Penmas IKIP Siliwangi')
@section('page-title', 'Mata Kuliah')
@section('page-subtitle', 'Daftar Kurikulum dan Mata Kuliah')

@section('content')
    <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl border border-teal-100/50 overflow-hidden">
        <!-- Toolbar -->
        <div class="p-6 border-b border-slate-100 flex flex-col sm:flex-row justify-between items-center gap-4">
            <form action="{{ route('mata-kuliah.index') }}" method="GET" class="w-full sm:w-96">
                <div class="relative">
                    <input type="text" name="search" value="{{ $search }}" placeholder="Cari mata kuliah atau kode..."
                        class="w-full pl-10 pr-4 py-2 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all">
                    <svg class="w-5 h-5 text-slate-400 absolute left-3 top-2.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </form>
            <div class="text-sm text-slate-500">
                Total: <span class="font-bold text-slate-800">{{ $mataKuliah->total() }}</span> Mata Kuliah
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50 border-b border-slate-100">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">No</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Kode MK
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Nama Mata
                            Kuliah</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-slate-500 uppercase tracking-wider">SKS</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($mataKuliah as $index => $mk)
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">
                                {{ $mataKuliah->firstItem() + $index }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="font-mono text-sm text-purple-600 bg-purple-50 px-2 py-1 rounded border border-purple-100">
                                    {{ $mk->kode }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-medium text-slate-800">{{ $mk->nama }}</div>
                                @if($mk->deskripsi)
                                    <div class="text-xs text-slate-500 mt-1">{{ Str::limit($mk->deskripsi, 50) }}</div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <span
                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-slate-100 text-slate-700 font-bold text-sm">
                                    {{ $mk->sks }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center text-slate-500">
                                <svg class="mx-auto h-12 w-12 text-slate-300 mb-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <p>Tidak ada data mata kuliah ditemukan</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="p-6 border-t border-slate-100">
            {{ $mataKuliah->withQueryString()->links() }}
        </div>
    </div>
@endsection