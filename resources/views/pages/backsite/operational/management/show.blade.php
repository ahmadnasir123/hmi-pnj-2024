<table class="table table-bordered">
    <tr>
        <th>Divisi</th>
        <td>{{ isset($doctor->category->name) ? $doctor->category->name : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{ isset($management->name) ? $management->name : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Photo</th>
        <td>
            <img src="
                @if ($management->photo != "")
                    @if(File::exists('storage/'.$management->photo))
                        {{ url(Storage::url($management->photo)) }}
                    @else
                       {{ 'N/A' }}
                    @endif
                @else
                    {{ 'N/A' }}
                @endif " alt="pengurus photo" class="users-avatar-shadow" height="100" width="100">
        </td>
    </tr>
</table>