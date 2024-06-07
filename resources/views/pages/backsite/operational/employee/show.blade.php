<table class="table table-bordered">
    <tr>
        <th>Divisi</th>
        <td>{{ isset($doctor->category->name) ? $employee->category->name : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{ isset($employee->name) ? $employee->name : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Angkatan</th>
        <td>{{ isset($employee->angkatan) ? $employee->angkatan : 'N/A' }}</td>
    </tr>
    <tr>
        <th>LK-1</th>
        <td>{{ isset($employee->lk1) ? $employee->lk1 : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Tahun</th>
        <td>{{ isset($employee->tahun_1) ? $employee->tahun_1 : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Lk-2</th>
        <td>{{ isset($employee->lk_2) ? $employee->lk_2 : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Tahun</th>
        <td>{{ isset($employee->tahun_2) ? $employee->tahun_2 : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Lk-3</th>
        <td>{{ isset($employee->lk3) ? $employee->lk3 : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Tahun</th>
        <td>{{ isset($employee->tahun_3) ? $employee->tahun_3 : 'N/A' }}</td>
    </tr>
</table>