<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Ảnh</th>
                        <th>Ngàu Sinh</th>
                        <th>Địa chỉ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->avatar }}</td>
                            <td>{{ $item->birth }}</td>
                            <td>{{ $item->address }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div >
                    {{ $users->links("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </div>
</div>