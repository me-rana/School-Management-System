<div class="navbar-nav mx-auto py-0">
    <a href="{{ route('প্রধান পেইজ') }}" class="nav-item nav-link active">প্রধান পেইজ</a>
    <a href="{{ route('আমাদের সম্পর্কে') }}" class="nav-item nav-link">আমাদের সম্পর্কে</a>
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">সকল কোর্সসমূহ</a>
        <div class="dropdown-menu m-0">
            <a href="#" class="dropdown-item">{{ $courses_data['course1'] }}</a>
            <a href="#" class="dropdown-item">{{ $courses_data['course2'] }}</a>
            <a href="#" class="dropdown-item">{{ $courses_data['course3'] }}</a>
        </div>
    </div>
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">অন্যান্য</a>
        <div class="dropdown-menu m-0">
            <a href="{{ route('নোটিশ') }}" class="dropdown-item">নোটিশসমূহ</a>
            <a href="{{ route('খরচের তালিকা') }}"  class="dropdown-item">কোর্সের খরচের তালিকা</a>
            <a href="{{ route('শিক্ষকমণ্ডলী') }}" class="dropdown-item">শিক্ষকমণ্ডলী</a>
            <a href="{{ route('টেস্টিওমিনাল') }}" class="dropdown-item">টেস্টিওমিনাল</a> 
        </div>
    </div>
    <a href="{{ route('যোগাযোগ') }}" class="nav-item nav-link">যোগাযোগ</a>
</div>
<a href="#" class="btn btn-primary py-2 px-4 d-none d-lg-block">ভর্তি প্রক্রিয়া</a>