<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <td>{{ isset($alumni->name) ? $alumni->name : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Angkatan</th>
        <td>{{ isset($alumni->angkatan) ? $alumni->angkatan : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Photo</th>
        <td>
            <img src="
                    @if ($alumni->photo != "")
                        @if(File::exists('storage/'.$alumni->photo))
                            {{ url(Storage::url($alumni->photo)) }}
                        @else
                           {{ 'N/A' }}
                        @endif
                    @else
                        {{ 'N/A' }}
                    @endif " alt="pengurus photo" class="users-avatar-shadow" height="100" width="100">
        </td>
    </tr>
</table>