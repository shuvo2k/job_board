@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3>Apllicants</h3>
                  
                    <hr>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Apllicant Name</th>
                                <th scope="col">Skills</th>
                                <th scope="col">Profile Picture</th>
                                <th scope="col">Resume</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          ?>
                          @if (isset($apllicants))
                            @foreach ($apllicants as $apllicant)
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td>{{$apllicant->first_name}} {{ $apllicant->last_name }}</td>
                                <td>{{ $apllicant->skills }}</td>
                                <td><img src="{{ asset($apllicant->image) }}" class="img-fluid pull-xs-left" alt="profile pic" height="120px" width="150px"></td>
                                <td><a href="{{ asset($apllicant->resume) }}">Download resume</a></td>
                            </tr>
                            <?php $i++ ?>
                            @endforeach
                          @endif

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
