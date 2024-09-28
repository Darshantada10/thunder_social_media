<div class="col-lg-6">
    <div class="central-meta">
        <div class="editing-info">
            <h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>

            <form method="post" action="{{route('update.profile-information')}}" enctype="multipart/form-data">

              @csrf
              {{-- @method('put')
              @method('patch') --}}

                <div class="form-group half">	
                  <input type="text" id="name" name="name" value="{{$data->name}}" />
                  <label class="control-label" for="name">Name</label><i class="mtrl-select"></i>
                </div>
                <div class="form-group half">	
                  <input type="text" name="username" id="username" value="{{$data->username}}"  />
                  <label class="control-label" for="username">Username</label><i class="mtrl-select"></i>
                </div>
                <div class="form-group">	
                  <input type="text" id="email" name="email" value="{{$data->email}}"/>
                  <label class="control-label" for="email">Email</label><i class="mtrl-select"></i>
                </div>
                <div class="form-group">	
                  <input type="file" id="profile_picture" name="profile_picture" accept="image/*" />
                  <label class="control-label" for="profile_picture">Profile Picture</label><i class="mtrl-select"></i>
                  <img src="{{asset('profile_picture/'.$data->profile_picture)}}" alt="" width="100">
                </div>
                <div class="dob">
                    <div class="form-group">
                        <select name="day">
                            <option value="">Day</option>
                            @for ($i = 1; $i <= 31; $i++)
                                <option value="{{$i}}" {{$i == $day ? 'selected' : ''}}>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">

                      <select name="month" >
                        <option value="">Month</option>
                        @foreach (range(1,12) as $m)
                              <option value="{{date('M',mktime(0,0,0,$m,1))}}" {{$month == date('M',mktime(0,0,0,$m,1)) ? "selected" : "" }} >{{date('M',mktime(0,0,0,$m,1))}}</option>
                        @endforeach
                      </select>

                    </div>
                    <div class="form-group">
                        <select name="year">
                          <option value="">Year</option>
                          @for ($i = date('Y'); $i >= 1900; $i--)
                              <option value="{{$i}}" {{$i == $year ? 'selected' : ''}}>{{$i}}</option>
                          @endfor
                        </select>
                    </div>
                </div>
                <div class="form-radio">
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" value="male" {{$data->gender == 'male' ? 'checked' : ''}}><i class="check-box"></i>Male
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" value="female" {{$data->gender == 'female' ? 'checked' : ''}}><i class="check-box"></i>Female
                    </label>
                  </div>
                </div>
                <div class="form-group">	
                  <textarea rows="4" id="bio" name="bio"></textarea>
                  <label class="control-label" for="bio">About Me</label><i class="mtrl-select"></i>
                </div>
                <div class="submit-btns">
                    <button type="button" class="mtr-btn"><span>Cancel</span></button>
                    <button type="submit" class="mtr-btn"><span>Update</span></button>
                </div>
            </form>
        </div>
    </div>	
</div>