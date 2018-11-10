@include('pk.includes.header')

<?php 
 use App\Libraries\Encryption;
 ?>
<br>
<br>
<br/> 
<br/> 
<div class="container">
    <div class="row">
        <div class="w3l-table-info agile_info_shadow">
                    <h3 class="w3_inner_tittle two">Availabe Group Wise Donar List</h3>
                   
                    <table id="table-no-resize">
                    <thead>
                      <tr>
                      <th>Name</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Height</th>
                      <th>Province</th>
                      <th>Sport</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($availableDonar as $donar)
                      <tr>
                      <td>{{ $donar->last_name }}</td>
                      <td>25</td>
                      <td>Female</td>
                      <td>5'4</td>
                      <td>{{ $donar->union }}</td>
                      <td>{{ Encryption::decodeId(Encryption::encodeId($donar->id)) }}</td>
                      </tr>
                      @endforeach
                      <tr>
                      <td>John Stone</td>
                      <td>30</td>
                      <td>Male</td>
                      <td>5'9</td>
                      <td>Ontario</td>
                      <td>Badminton</td>
                      </tr>
                      <tr>
                      <td>Jane Strip</td>
                      <td>29</td>
                      <td>Female</td>
                      <td>5'6</td>
                      <td>Manitoba</td>
                      <td>Hockey</td>
                      </tr>
                      <tr>
                      <td>Gary Mountain</td>
                      <td>21</td>
                      <td>Male</td>
                      <td>5'8</td>
                      <td>Alberta</td>
                      <td>Curling</td>
                      </tr>
                      <tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr><tr>
                          <td>James Camera</td>
                          <td>31</td>
                          <td>Male</td>
                          <td>6'1</td>
                          <td>British Columbia</td>
                          <td>Hiking</td>
                      </tr>
                    </tbody>
                    </table>
    </div>
    </div>
</div>

@include('pk.includes.footer')