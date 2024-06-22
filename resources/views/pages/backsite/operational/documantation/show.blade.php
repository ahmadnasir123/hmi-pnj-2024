<table class="table table-bordered">
    <tr>
        <th>Nama Kegiatan</th>
        <td>{{ isset($documantation->name) ? $documantation->name : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Photo</th>
        <td>
            <img src="
                @if ($documantation->photo != "")
                    @if(File::exists('storage/'.$documantation->photo))
                        {{ url(Storage::url($documantation->photo)) }}
                    @else
                       {{ 'N/A' }}
                    @endif
                @else
                    {{ 'N/A' }}
                @endif " alt="documantation photo" class="users-avatar-shadow" height="100" width="100">
        </td>
    </tr>
</table>