@extends('base')
@section('content')
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Recently Added Jobs</span>
        <h2 class="mb-4"><span>Recent</span> Jobs</h2>
      </div>
    </div>
    <div class="row">
    @if (isset($jobs))
      @foreach ($jobs as $job)
        <div class="col-md-12 ftco-animate">

          <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

            <div class="mb-4 mb-md-0 mr-5">
              <div class="job-post-item-header d-flex align-items-center">
                <h2 class="mr-3 text-black h3">{{ $job->job_title }}</h2>

              </div>
                <p>{{ $job->job_description }}</p>
              <div class="job-post-item-body d-block d-md-flex">
              <div class="mr-3"><span class="icon-layers"></span> <a href="#">{{ $job->company->business_name }}</a></div>
              <div class="mr-3"><span class="icon-dollar"></span> <a href="#">{{ $job->salary }}</a></div>
              <div><span class="icon-my_location"></span> <span>{{ $job->location }}, {{ $job->country }}</span></div>
              </div>
            </div>

            <div class="ml-auto d-flex">
              <a href="#" class="btn btn-primary py-2 mr-1">Apply Job</a>

            </div>
          </div>
        </div><!-- end -->


      @endforeach
    @else
      <div class="col-md-12 ftco-animate">
        <h3>No Jobs posted Yet.</h3>
      </div>
    @endif



    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
          @if (isset($jobs))
              <li>{{ $jobs->links() }}</li>
          @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="ftco-section-parallax">
  <div class="parallax-img d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <h2>Subcribe to our Newsletter</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          <div class="row d-flex justify-content-center mt-4 mb-4">
            <div class="col-md-8">
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
