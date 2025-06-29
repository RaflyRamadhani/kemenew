<x-admin-layout>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-white">📋 Detail Jadwal: {{ $jadwal->judul }}</h2>
        <a href="{{ route('admin.jadwal-pelatihan.index') }}" class="text-sm text-white/70 hover:underline">⬅️ Kembali</a>
    </div>

    <div class="p-6 bg-white/5 border border-white/10 rounded shadow backdrop-blur text-white space-y-6">
        <div>
            <h3 class="text-lg font-bold">🗓️ Informasi Pelatihan</h3>
            <p><strong>Tanggal:</strong> {{ $jadwal->tgl_mulai }} s/d {{ $jadwal->tgl_selesai }}</p>
            <p><strong>Status:</strong>
                @if($jadwal->status)
                    <span class="text-green-400 font-semibold">Aktif</span>
                @else
                    <span class="text-red-400 font-semibold">Tidak Aktif</span>
                @endif
            </p>
        </div>

        <div>
            <h3 class="text-lg font-bold">👥 Daftar Peserta</h3>

            @if(session('success'))
                <div class="text-green-400 bg-green-900/20 border border-green-500/30 p-3 rounded">
                    ✅ {{ session('success') }}
                </div>
            @endif

            <table class="min-w-full table-auto border border-white/10 divide-y divide-white/10 text-sm">
                <thead class="bg-white/10 text-white/80">
                    <tr>
                        <th class="px-4 py-2 text-left">Nama</th>
                        <th class="px-4 py-2 text-left">NIK</th>
                        <th class="px-4 py-2 text-left">Status Pendaftaran</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($jadwal->pendaftars as $pendaftar)
                        <tr class="hover:bg-white/10">
                            <td class="px-4 py-2">{{ $pendaftar->user->biodata->nama ?? $pendaftar->user->name }}</td>
                            <td class="px-4 py-2">{{ $pendaftar->user->biodata->nik ?? '-' }}</td>
                            <td class="px-4 py-2">
                                @if($pendaftar->status_peserta === 'approved')
                                    <span class="text-green-400 font-semibold">✅ Disetujui</span>
                                @else
                                    <form method="POST" action="{{ route('admin.pelatihan.acc', $pendaftar->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <button 
                                            class="text-green-300 hover:underline"
                                            onclick="this.disabled=true; this.innerText='Menyetujui...'; this.form.submit();">
                                            ✅ ACC
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-white/50 py-4">Belum ada peserta.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
