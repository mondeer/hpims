@extends('system.dashboard')

@section('content')
    <div class="col-md-12">
      <a class="btn btn-success btn-lg pull-right" href="/patient/enroll">Admit Patient</a>
        <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th> First Name</th>
                <th> Middle Name</th>
                <th> Last Name</th>
                <th> National ID</th>
                <th> Date Of Birth</th>
                <th> Patient ID</th>
                <th> Ward</th>
                <th> Bed No.</th>
                <th> Mobile</th>
                <th> Address</th>
                <th> Next of Kin</th>
                <th> Next of Kin Contact</th>
              </tr>
            </thead>
            <tbody>
              @foreach($patients as $patient)
                <tr>
                  <td>{{$patient->id}}</td>
                  <td>{{$patient->first_name}}</td>
                  <td>{{$patient->middle_name}}</td>
                  <td>{{$patient->last_name}}</td>
                  <td>{{$patient->national_id}}</td>
                  <td>{{$patient->dob}}</td>
                  <td>{{$patient->patient_id}}</td>
                  <td>{{$patient->ward}}</td>
                  <td>{{$patient->bed_no}}</td>
                  <td>{{$patient->mobile}}</td>
                  <td>{{$patient->address}}</td>
                  <td>{{$patient->next_of_kin}}</td>
                  <td>{{$patient->next_of_kin_contact}}</td>
                  <td>
                    <form class="deletestu" action="/patient/{{ $patient->id }}/delete" method="post">
                      <input type="hidden" name="_method" value="delete">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection
