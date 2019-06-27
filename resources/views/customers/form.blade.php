<div class="form-group">
    <label for="name">Name: </label>
    <input class="form-control" name="name" value="{{old('name') ?? $customer->name}}" type="text" placeholder="Name"
        required>
    {{$errors->first('name')}}
</div>
<div class="form-group">
    <label for="email">Email: </label>
    <input class="form-control" name="email" value="{{old('email') ?? $customer->email}}" type="text"
        placeholder="Email" required>
    {{$errors->first('email')}}
</div>
<div class="form-group">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control">
        <option value="" selected disabled>Select customer status</option>
        <option value="1" {{$customer->status == "Active" ? 'selected' : ''}}>Active</option>
        <option value="0" {{$customer->status == "Inactive" ? 'selected' : ''}}>Inactive</option>
    </select>
    {{$errors->first('status')}}
</div>
<div class="form-group">
    <label for="company_id">Company</label>
    <select name="company_id" id="company_id" class="form-control">
        <option value="" selected disabled>Select Company</option>
        @foreach ($companies as $company)
        <option value="{{$company->id}}" {{$company->id == $customer->company_id ? 'selected' : ''}}>{{$company->name}}
        </option>
        @endforeach
    </select>
    {{$errors->first('status')}}
</div>

@csrf