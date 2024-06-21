<table class="table table-bordered">
    <tr>
        <th>Judul</th>
        <td>{{ isset($tulisan->judul) ? $tulisan->judul : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Angkatan</th>
        <td>{{ isset($tulisan->deskripsi) ? $tulisan->deskripsi : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Photo</th>
        <td>
            <img src="
                    @if ($tulisan->photo != "")
                        @if(File::exists('storage/'.$tulisan->photo))
                            {{ url(Storage::url($tulisan->photo)) }}
                        @else
                           {{ 'N/A' }}
                        @endif
                    @else
                        {{ 'N/A' }}
                    @endif " alt="pengurus photo" class="users-avatar-shadow" height="100" width="100">
        </td>
    </tr>
</table>