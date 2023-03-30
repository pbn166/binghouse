@ -46,7 +46,7 @@
            
        </style>
      
    </head>
    </head> 
   
    <body class="hero-anime">

@ -137,22 +137,90 @@
  </div>
</div>

<div class="mt-3 container" >
    <ol class="mx-3 md:mx-0 s12ywfnp" itemscope="" itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://www.chotot.com" itemprop="item"><span itemprop="name">Bing House</span></a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 20" data-type="monochrome" width="1em" height="1em" fill="none" class="separator"><path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" d="M2 2l8 7.9L2 18"></path></svg><meta itemprop="position" content="1"></li>
        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://www.chotot.com/user/35fcae77f56b0ada8d267b57d6f08949" class="text-blue-500 inline-flex max-w-[150px] md:max-w-none [&amp;>span]:truncate" itemprop="item"><span itemprop="name">Trang cá nhân của <?php echo $_SESSION['HOTEN'];?></span></a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 20" data-type="monochrome" width="1em" height="1em" fill="none" class="separator"><path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" d="M2 2l8 7.9L2 18"></path></svg><meta itemprop="position" content="2"></li>
        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><span itemprop="name">Thông tin cá nhân</span><meta itemprop="position" content="3"></li>
    </ol>
    <h1 class="font-bold text-xl mt-4 hidden md:block">Chỉnh sửa trang cá nhân</h1>
    <div class="grid md:grid-cols-[225px_auto] mt-4 md:gap-3">
        <div class="bg-white rounded h-max md:p-4 pt-7">
            <ul class="flex flex-col gap-4">
                <li><a class="font-bold cursor-default text-gray-900">Thông tin cá nhân</a></li>
                <li><a class="cursor-pointer !text-gray-400">Cài đặt tài khoản</a></li>
            </ul>
        </div>
    </div>
       
<div class="mt-3 container">
<ol class="mx-3 md:mx-0 s1vf7tl0" itemscope="" itemtype="https://schema.org/BreadcrumbList">
<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
<a href="https://www.chotot.com" itemprop="item">
<span itemprop="name">Chợ Tốt</span></a>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 20" data-type="monochrome" width="1em" height="1em" fill="none" class="separator">
<path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" d="M2 2l8 7.9L2 18"></path></svg><meta itemprop="position" content="1"></li>
<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
<a href="https://www.chotot.com/user/374088ec093f7b202616a0044216a94f" class="text-blue-500 inline-flex max-w-[150px] md:max-w-none [&amp;>span]:truncate" itemprop="item">
<span itemprop="name">Trang cá nhân của Tên chưa cung cấp</span></a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 20" data-type="monochrome" width="1em" height="1em" fill="none" class="separator"><path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" d="M2 2l8 7.9L2 18"></path>
</svg>
<meta itemprop="position" content="2"></li>
<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><span itemprop="name">Thông tin cá nhân</span>
<meta itemprop="position" content="3"></li></ol>
<h1 class="font-bold text-xl mt-4 hidden md:block">Chỉnh sửa trang cá nhân</h1><div class="grid md:grid-cols-[225px_auto] mt-4 md:gap-3">
<div class="bg-white rounded h-max md:p-4 pt-7">
<ul class="flex flex-col gap-4"><li><a class="font-bold cursor-default text-gray-900">Thông tin cá nhân</a></li><li>
<a class="cursor-pointer !text-gray-400">Liên kết mạng xã hội</a></li><li><a class="cursor-pointer !text-gray-400">Cài đặt tài khoản</a>
</li>
</ul>
</div>
<div class="bg-white md:py-8 p-4 rounded">
<div class="mb-4 md:mb-8"><h2 class="text-lg font-bold text-gray-900 mb-4">Hồ sơ cá nhân</h2><div class="flex flex-col md:flex-row md:gap-3">
<div class="c4zo2ss" style="--c4zo2ss-0:100%">
<div class="ib7fnnz">
  <input class="i1qhutuv i1ahsojf hasValue required" type="text" inputmode="text" name="full_name" value="Tên chưa cung cấp" fdprocessedid="9imos">
<label for="">Họ và tên</label>
</div>
<p class="p4nrsyj"></p>
</div>
<div class=" [&amp;>div>div>input]:pointer-events-none w-full">
  <div class="c4zo2ss" style="--c4zo2ss-0:100%">
<div class="disabled ib7fnnz"><input class="i1qhutuv i1ahsojf hasValue required" type="text" inputmode="text" name="phone" value="0942906312" disabled="" fdprocessedid="ok4gl9">
<label for="">Số điện thoại</label></div>
<p class="p4nrsyj"></p></div></div></div><div>
<div class="[&amp;>div>svg]:-rotate-90 [&amp;>div>select]:pr-7 [&amp;>div>select]:text-ellipsis [&amp;>div>select]:overflow-hidden c4zo2ss" style="--c4zo2ss-0:100%">
<div class="wrapper ib7fnnz"><select class="select i1qhutuv isDropdown" fdprocessedid="ogmv1w"><option hidden="" value="" selected=""></option>
<option disabled="" value="" selected="">Địa chỉ</option><option value="default"></option></select><label class="label" for="">Địa chỉ</label>
<svg data-type="monochrome" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="none" class="arrow">
<path d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z" fill="currentColor"></path></svg></div>
<p class="helptext p4nrsyj"></p>
</div>
</div>
<div class="cp8qqkf" style="--cp8qqkf-0:100%">
<div class="resize-vertical tb2bt24" style="--tb2bt24-5:96px">
<div class="focus-capture"></div><textarea class="s18pqg82" inputmode="text" name="description" placeholder="Viết vài dòng giới thiệu về gian hàng của bạn..."></textarea>
<label for="">Giới thiệu</label></div><p class="p4bu3mm">Tối đa 60 từ</p></div></div><div class="mb-2 md:mb-6"><h2 class="text-lg font-bold text-gray-900">Thông tin bảo mật</h2>
<p class="text-sm text-gray-600 mb-4">Những thông tin dưới đây mang tính bảo mật. Chỉ bạn mới có thể thấy và chỉnh sửa những thông tin này.</p>
<div class="mb-4"><div class="c4zo2ss" style="--c4zo2ss-0:100%">
<div class="ib7fnnz"><input class="i1qhutuv i1ahsojf" type="text" inputmode="text" name="email" value="" fdprocessedid="nqzzai">
<label for="">Email</label></div>
<p class="p4nrsyj">Bạn không thể thay đổi địa chỉ Email khi đã liên kết với tài khoản</p>
</div>
</div>
<div>
<div class="[&amp;>div>svg]:-rotate-90 [&amp;>div>select]:pr-7 [&amp;>div>select]:text-ellipsis [&amp;>div>select]:overflow-hidden c4zo2ss" style="--c4zo2ss-0:100%">
<div class="wrapper ib7fnnz"><select class="select i1qhutuv isDropdown" fdprocessedid="sj7z4"><option hidden="" value="" selected=""></option><option disabled="" value="" selected="">CCCD / CMND / Hộ chiếu</option><option value="default"></option></select><label class="label" for="">CCCD / CMND / Hộ chiếu</label><svg data-type="monochrome" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="none" class="arrow"><path d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z" fill="currentColor"></path></svg></div><p class="helptext p4nrsyj"></p></div></div><div><div class="[&amp;>div>svg]:-rotate-90 [&amp;>div>select]:pr-7 [&amp;>div>select]:text-ellipsis [&amp;>div>select]:overflow-hidden c4zo2ss" style="--c4zo2ss-0:100%">
<div class="wrapper ib7fnnz"><select class="select i1qhutuv isDropdown" fdprocessedid="xh3bzp">
<option hidden="" value="" selected=""></option><option disabled="" value="" selected="">Thông tin xuất hoá đơn</option><option value="default"></option>
</select>
<label class="label" for="">Thông tin xuất hoá đơn</label><svg data-type="monochrome" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="none" class="arrow"><path d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z" fill="currentColor"></path></svg></div>
<p class="helptext p4nrsyj"></p></div></div><div class="c4zo2ss" style="--c4zo2ss-0:100%">
<div class="ib7fnnz"><input class="i1qhutuv i1ahsojf" type="text" inputmode="text" name="tax_code" value="" fdprocessedid="6012"><label for="">Mã số thuế</label>
</div>
<p class="p4nrsyj"></p></div><div><div class="[&amp;>div>svg]:-rotate-90 [&amp;>div>select]:pr-7 [&amp;>div>select]:text-ellipsis [&amp;>div>select]:overflow-hidden c4zo2ss" style="--c4zo2ss-0:100%"><div class="wrapper ib7fnnz"><select class="select i1qhutuv isDropdown" fdprocessedid="argels"><option hidden="" value="" selected=""></option><option disabled="" value="" selected="">Danh mục yêu thích</option><option value="default"></option></select>
<label class="label" for="">Danh mục yêu thích</label><svg data-type="monochrome" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="none" class="arrow"><path d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z" fill="currentColor"></path></svg></div><p class="helptext p4nrsyj">
</p>
</div>
</div>
<div class="flex gap-3">
<div class="c4zo2ss" style="--c4zo2ss-0:100%"><div class="wrapper ib7fnnz">
<select class="select i1qhutuv isDropdown" name="gender" fdprocessedid="vy7y2n">
<option hidden="" value="" selected=""></option><option disabled="" value="" selected="">Giới tính</option>
<option value="f">Nữ</option><option value="m">Nam</option><option value="u">Giới tính khác</option>
</select>
<label class="label" for="">Giới tính</label><svg data-type="monochrome" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="none" class="arrow">
<path d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z" fill="currentColor"></path></svg></div>
<p class="helptext p4nrsyj">
</p>
</div>
<div class="w-full relative">
<div class="react-datepicker-wrapper">
<div class="react-datepicker__input-container">
<span role="alert" aria-live="polite" class="react-datepicker__aria-live"></span><div class="c4zo2ss" style="--c4zo2ss-0:100%"><div class="ib7fnnz"><input class="i1qhutuv i1ahsojf" type="text" inputmode="text" value="" readonly="readonly" fdprocessedid="sc8o8"><label for="">Ngày, tháng, năm sinh</label></div><p class="p4nrsyj"></p></div></div></div><svg data-type="monochrome" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="none" class="text-xs text-gray-400 absolute right-[12px] h-[48px] top-0 pointer-events-none"><path d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z" fill="currentColor"></path></svg></div></div></div><button class="b1f8o96z primary r-normal medium w-normal i-left disabled uppercase !font-bold" disabled="">Lưu thay đổi</button></div></div></div>
           
   

