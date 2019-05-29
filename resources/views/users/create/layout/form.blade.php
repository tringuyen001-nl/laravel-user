<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Đăng kí tài khoản</h3>
            <div class="tile-body">
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="control-label">Tên</label>
                        <input class="form-control" name="name" type="text" placeholder="Mời bạn nhập tên">
                    </div>
                    @if ($errors->has('name'))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->get('name') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input class="form-control" name="email" type="email" placeholder="Mời bạn nhập email">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Mật khẩu</label>
                        <input class="form-control" name="password" type="password" placeholder="Mời bạn nhập mật khẩu">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nhập lại mật khấu</label>
                        <input class="form-control" name="re_password" type="password" placeholder="Mời bạn nhập lại mật khẩu">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Chọn hình đại diện</label>
                        <input class="form-control" name="avatar" type="file">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Ngày Sinh</label>
                        <input class="form-control" name="birth" type="text" placeholder="Mời bạn chọn ngày sinh">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Địa chỉ</label>
                        <input class="form-control" name="address" type="text" placeholder="Mời bạn nhập địa chỉ">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Quyền</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="level" value="1">admin
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="level" value="1">admin
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i>đăng ký
                    </button>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('user.index') }}">
                        <i class="fa fa-fw fa-lg fa-times-circle"></i>Trở về
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>