<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Đăng kí tài khoản</h3>
            <div class="tile-body">
                <form action="{{ route('user.store') }}" method="POST">
                    <div class="form-group">
                        <label class="control-label">Tên</label>
                        <input class="form-control" type="text" placeholder="Mời bạn nhập tên">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input class="form-control" type="email" placeholder="Mời bạn nhập email">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Mật khẩu</label>
                        <input class="form-control" type="password" placeholder="Mời bạn nhập mật khẩu">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nhập lại mật khấu</label>
                        <input class="form-control" type="password" placeholder="Mời bạn nhập lại mật khẩu">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Chọn hình đại diện</label>
                        <input class="form-control" type="file">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Ngày Sinh</label>
                        <input class="form-control" type="text" placeholder="Mời bạn chọn ngày sinh">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Địa chỉ</label>
                        <input class="form-control" type="text" placeholder="Mời bạn nhập địa chỉ">
                    </div>
                    <button class="btn btn-primary" type="button">
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