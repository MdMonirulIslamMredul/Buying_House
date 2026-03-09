<div class="row">
    <div class="col-lg-12">
        <div class="card">

            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('store.counter') }}" enctype="multipart/form-data"
                    method="POST">
                    @csrf
                    @if ($counter != null)
                        <input type="hidden" name="id" value="{{ $counter->id }}">
                    @endif
                    <div class="form-group">
                        <label>Employees</label>
                        @if ($counter != null)
                            <input type="number" class="form-control" rows="5" value="{{ $counter->doctors }}"
                                name="doctors" id="doctors" placeholder="Email">
                        @else
                            <input type="number" class="form-control" rows="5" name="doctors" id="doctors"
                                placeholder="Total Doctors">
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Projects Complete</label>
                        @if ($counter != null)
                            <input type="text" class="form-control" rows="5" value="{{ $counter->services }}"
                                name="services" id="services" placeholder="Facebook">
                        @else
                            <input type="text" class="form-control" rows="5" name="services" id="services"
                                placeholder="Total Services">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nationwide Team</label>
                        @if ($counter != null)
                            <input type="text" class="form-control" rows="5" name="clients"
                                value="{{ $counter->clients }}" id="clients" placeholder="Instagram">
                        @else
                            <input type="text" class="form-control" rows="5" name="clients" id="clients"
                                placeholder="Happy Clients">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Years of Experience</label>
                        @if ($counter != null)
                            <input type="text" class="form-control" rows="5" name="awards"
                                value="{{ $counter->awards }}" id="awards" placeholder="Total Awards">
                        @else
                            <input type="text" class="form-control" rows="5" name="awards" id="awards"
                                placeholder="Total Awards">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Background Image</label>
                        @if ($counter != null)
                            <input type="file" class="form-control" rows="5" name="bg_image" id="bg_image">
                            <img src="{{ asset($counter->bg_image) }}" width="100px" height="100px" alt="">
                        @else
                            <input type="file" class="form-control" rows="5" name="bg_image" id="bg_image">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        @if ($counter != null)
                            <textarea id="tinymce" class="editor form-control" rows="5" name="description">{{ $counter->description }}</textarea>
                        @else
                            <textarea id="tinymce" class="editor form-control" rows="5" name="description"></textarea>
                        @endif
                    </div>


                    <div class="form-group">
                        <label>Establishment Year</label>
                        @if ($counter != null)
                            <input type="text" class="form-control" rows="5" name="establishment_year"
                                value="{{ $counter->establishment_year }}" id="establishment_year"
                                placeholder="Establishment Year">
                        @else
                            <input type="text" class="form-control" rows="5" name="establishment_year"
                                id="establishment_year" placeholder="Establishment Year">
                        @endif
                    </div>



                    <div class="table-responsive">

                        @if ($links != null)
                            <button type="submit" class="btn btn-info">Update</button>
                        @else
                            <button type="submit" class="btn btn-info">Submit</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
