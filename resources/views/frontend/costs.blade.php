@extends('frontend.theme.main')
@section('main')
<div class="container">
    @if ($courses->count() > 0)
      @foreach ($courses as $course)
      <h3 class="text-center">{{ $course->getSubject->name }}</h3> <br>
      <h4 class="text-center text-success">{{ $course->name }}</h4>
  
      <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">সেগমেন্ট</th>
              <th scope="col">গণনা</th>
              <th scope="col">খরচ</th>
              <th scope="col">মোট খরচ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">১</th>
              <td colspan="2">ভর্তি ফি</td>
              <td>{{ $course->admission }} টাকা</td>
              <td class="text-right">{{ $course->admission }} টাকা</td> 
            </tr>
            <tr>
              <th scope="row">২</th>
              <td>টিউশন ফি</td>
              <td>{{ $course->month }} মাস</td>
              <td>{{ $course->tution }} টাকা</td>
              <td class="text-right">{{ $course->month * $course->tution }} টাকা</td>
            </tr>
            <tr>
              <th scope="row">৩</th>
              <td>সেমিস্টার ফি</td>
              <td>{{ $course->count }} সেমিস্টার</td>
              <td>{{ $course->semester }} টাকা</td>
              <td class="text-right">{{ $course->count * $course->semester }} টাকা</td>
            </tr>
            <tr>
              <th scope="row">৪</th>
              <td>ফর্ম-ফ্লাপ ফি</td>
              <td>{{ $course->count }} বার</td>
              <td>{{ $course->formflap }} টাকা</td>
              <td class="text-right">{{ $course->count * $course->formflap }} টাকা</td> 
            </tr>
            <tr>
              <tr>
                <th scope="row">৫</th>
                <td>ল্যাব ফি</td>
                <td>{{ $course->count }} বার</td>
              <td>{{ $course->labfee }} টাকা</td>
              <td class="text-right">{{ $course->count * $course->labfee }} টাকা</td>
              </tr>
              <tr>
            
              <td class="text-right" colspan="4">সর্বমোট</td>
              <td class="text-right">{{ $course->admission + ($course->tution * $course->month) + ($course->semester * $course->count) + ($course->formflap * $course->count) + ($course->labfee * $course->count)}} টাকা</td>
            </tr>
          </tbody>
        </table>
  
        <br><br>
  
      
      @endforeach
    @else
        <p class="text-center text-danger">No Course Found</p>
    @endif

      
</div>
@endsection