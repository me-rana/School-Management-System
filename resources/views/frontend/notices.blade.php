@extends('frontend.theme.main')
@section('main')
<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>

            <th scope="col">ডেট</th>
            <th scope="col">টাইটেল</th>
            <th scope="col">পড়ুন</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($notices as $notice) 
                      <tr class="">
                        <td scope="col-2" class="bg-warning text-white text-center"><h3 class="text-center text-white">{{ date_format($notice->created_at, "d") }}</h3><span class="text-center">{{ date_format($notice->created_at, "F") }}</span></td>
                        <td scope="col-8">{{ $notice->title }}</td>
                        <td scope="col-2"><a href="../../../../{{ $notice->pdf_path }}" target="_blank"><button class="btn btn-warning text-white">পড়ুন</button></a></td>
                      </tr>
                      @endforeach
         
        </tbody>
      </table>
</div>
@endsection