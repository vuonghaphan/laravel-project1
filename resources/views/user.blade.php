@extends('master/master')
@section('title','Quản Lý Thành viên')
@section('content')
<article class="content dashboard-page">
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-xl-12">
                <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                    <form action="" method="get">
                        <div class="card-header bordered">
                            <div class="header-block">
                                <h3 class="title"> Danh sách thành viên </h3>
                                <a href="/users/add" class="btn btn-primary btn-sm"> Thêm </a>
                            </div>
                            <div class="header-block pull-right">
                                <label class="search">
                                    <input class="search-input" name="search" placeholder="search...">
                                    <i class="fa fa-search search-icon"></i>
                                </label>
                                <div class="pagination">
                                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="item-list striped">
                        <li class="item item-list-header">
                            <div class="item-row">

                                <div class="item-col item-col-header ">

                                    <span>Họ Tên</span>

                                </div>
                                <div class="item-col item-col-header">

                                    <span>Số điện thoại</span>

                                </div>
                                <div class="item-col item-col-header ">

                                    <span>Địa chỉ</span>

                                </div>
                                <div class="item-col item-col-header ">

                                    <span>Số CMT</span>

                                </div>
                                <div class="item-col item-col-header">

                                    <span>Xoá</span>

                                </div>
                            </div>
                        </li>
                        @foreach ($users as $row)
                        <li class="item">
                            <div class="item-row">
                                <div class="item-col">
                                <a  href="/users/edit/{{$row->id}}">
                                    {{$row->full}}
                                    </a>
                                </div>
                                <div class="item-col">
                                    {{$row->phone}}
                                </div>
                                <div class="item-col">
                                <span title="Dũng Tiến-Thường tín-Hà Nội">
                                    {{$row->address}}</span>
                                </div>
                                <div class="item-col">
                                    {{$row->id_number}}
                                </div>
                                <div class="item-col ">
                                    <a onclick="return del('{{$row->full}}')" href="users/del/{{$row->id}}" class="btn btn-danger-outline">Xoá</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div align='right'>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{$users->appends(["search"=>request()->search])->links()}}
                </ul>
            </nav>
        </div>
        {{'lực ăn loz'}}
    </section>
</article>
@endsection
@section('script')
@parent
<script>
    function del(name){
        return confirm('bạn có muốn xóa '+name+'?');
    }
</script>
@endsection
