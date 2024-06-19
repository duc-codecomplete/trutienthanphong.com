@extends('layouts.master')
@section("content")
<div class="title_content">
    <div class="title_content_top"></div>
    <div class="title_content_tab">
        <div class="hien-thi-tin-tuc">
            <ul class="nav nav-tabs nav-tintuc">
                <li class="active"><a href="https://thiengioi.com/#sukien">TIN TỨC</a></li>
            </ul>
        </div>
    </div>

    <div class="title_content_detail">
        <div class="cover-tab-content">
            <div class="tab-content">
                <div id="sukien" class="tab-pane fade in active">
                    <div>
                        <div id="MainSite_ctsukien">
                            @foreach (range(0, 12) as $i)
                            <div class="bai-viet-dau row">
                                <div class="img-bai-viet-dau">
                                    <a href="/tin-tuc/aa">
                                        <img src="/images/HjeB6EL.jpeg" width="190" height="140" alt="Rà soát và thay đổi cơ chế đăng ký chính chủ TRÙNG LÂU">
                                    </a>
                                </div>
                                <div class="noi-dung-bai-viet-dau">
                                    <div style="width:100%" class="row">
                                        <div class="col-xs-9 tieu-de-bai-viet-dau">
                                            <h4>
                                                <a class="hot-gif" href="/tin-tuc/aa">Rà
                                                    soát và thay đổi cơ chế đăng ký chính chủ TRÙNG
                                                    LÂU</a>
                                            </h4>
                                        </div>
                                        <div class="col-xs-3"><span class="date-news">2024-06-17</span></div>
                                        <div class="col-xs-12">
                                            <span class="desc-news">🔔🔔[ THÔNG BÁO]🔔🔔

                                                Rà soát và thay đổi cơ chế đăng ký chính chủ trùng
                                                lâu, pet boss 5k và mão giáng sinh hạnh phúc</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="title_content_bottom"></div>
</div>
@endsection