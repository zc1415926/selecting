<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        {{ HTML::nav_link_li('profile','管理首页') }}
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="#">课程管理</a></li>
        <li><a href="#">浏览课程</a></li>
        <li><a href="#">添加课程</a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="">学生管理</a></li>
        {{ HTML::nav_link_li('students','浏览学生') }}
        {{ HTML::nav_link_li('register','添加学生') }}
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="">选课管理</a></li>
        <li><a href="">浏览选课</a></li>
        <li><a href="">添加选课</a></li>
    </ul>
</div>