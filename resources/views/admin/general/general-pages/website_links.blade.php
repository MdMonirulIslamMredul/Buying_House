<div class="row">
    <div class="col-lg-12">
        <div class="card">

            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('store.links') }}" enctype="multipart/form-data"
                    method="POST">
                    @csrf
                    @if ($links != null)
                        <input type="hidden" name="id" value="{{ $links->id }}">
                    @endif
                    <div class="form-group">
                        <label>Email</label>
                        @if ($links != null)
                            <input type="email" class="form-control" rows="5" value="{{ $links->email }}"
                                name="email" id="email" placeholder="Email">
                        @else
                            <input type="email" class="form-control" rows="5" name="email" id="email"
                                placeholder="Email">
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        @if ($links != null)
                            <input type="text" class="form-control" rows="5" value="{{ $links->facebook }}"
                                name="facebook" id="facebook" placeholder="Facebook">
                        @else
                            <input type="text" class="form-control" rows="5" name="facebook" id="facebook"
                                placeholder="Facebook">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        @if ($links != null)
                            <input type="text" class="form-control" rows="5" name="instagram"
                                value="{{ $links->instagram }}" id="instagram" placeholder="Instagram">
                        @else
                            <input type="text" class="form-control" rows="5" name="instagram" id="instagram"
                                placeholder="Instagram">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>LinkedIn</label>
                        @if ($links != null)
                            <input type="text" class="form-control" rows="5" name="linkedIn"
                                value="{{ $links->linkedIn }}" id="linkedIn" placeholder="LinkedIn">
                        @else
                            <input type="text" class="form-control" rows="5" name="linkedIn" id="linkedIn"
                                placeholder="LinkedIn">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Youtube</label>
                        @if ($links != null)
                            <input type="text" class="form-control" rows="5" name="youtube"
                                value="{{ $links->youtube }}" id="youtube" placeholder="Youtube">
                        @else
                            <input type="text" class="form-control" rows="5" name="youtube" id="youtube"
                                placeholder="Youtube">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Number</label>
                        @if ($links != null)
                            <input type="text" class="form-control" rows="5" name="number"
                                value="{{ $links->number }}" id="number" placeholder="Number">
                        @else
                            <input type="text" class="form-control" rows="5" name="number" id="number"
                                placeholder="Number">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        @if ($links != null)
                            <textarea class="form-control" row="3" name="address">{{ $links->address }}</textarea>
                        @else
                            <textarea class="form-control" row="3" name="address"></textarea>
                        @endif
                    </div>
                    <div class="form-group">
                        <label><strong>Google Maps Embed Code</strong></label>
                        <small class="form-text text-muted mb-2">
                            <strong>How to get embed code:</strong><br>
                            1. Go to <a href="https://www.google.com/maps" target="_blank">Google Maps</a><br>
                            2. Search for your business location<br>
                            3. Click "Share" button → "Embed a map" tab<br>
                            4. Copy the HTML code and paste below
                        </small>
                        @if ($links != null)
                            <textarea class="form-control" rows="8" name="map_link" id="map_link"
                                placeholder='<iframe src="https://www.google.com/maps/embed?pb=..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>'>{{ $links->map_link }}</textarea>
                        @else
                            <textarea class="form-control" rows="8" name="map_link" id="map_link"
                                placeholder='<iframe src="https://www.google.com/maps/embed?pb=..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>'></textarea>
                        @endif
                        <small class="form-text text-muted mt-1">
                            Paste the complete iframe embed code from Google Maps
                        </small>
                    </div>

                    <div class="form-group" id="map-preview-section"
                        @if (!$links || !$links->map_link) style="display:none;" @endif>
                        <label><strong>Map Preview</strong></label>
                        <div class="card">
                            <div class="card-body p-0" style="height: 350px; overflow: hidden; border-radius: 8px;">
                                <div id="map-preview-content">
                                    @if ($links && $links->map_link)
                                        {!! $links->map_link !!}
                                    @else
                                        <div class="text-center p-5 text-muted">
                                            <i class="fa fa-map-marker" style="font-size: 48px;"></i>
                                            <p class="mt-3">Paste your Google Maps embed code above to see preview
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <small class="form-text text-info mt-2">
                            <i class="fa fa-info-circle"></i> Preview updates automatically when you paste embed code
                        </small>
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

<script type="text/javascript">
    // Live preview for Google Maps embed code
    document.addEventListener('DOMContentLoaded', function() {
        const mapInput = document.getElementById('map_link');
        const previewSection = document.getElementById('map-preview-section');
        const previewContent = document.getElementById('map-preview-content');

        if (mapInput) {
            mapInput.addEventListener('input', function() {
                const embedCode = this.value.trim();

                if (embedCode && embedCode.includes('iframe')) {
                    // Show preview section
                    previewSection.style.display = 'block';

                    // Update preview content
                    previewContent.innerHTML = embedCode;
                } else if (embedCode === '') {
                    // Hide preview if empty
                    previewSection.style.display = 'none';
                } else {
                    // Show warning if not valid iframe
                    previewSection.style.display = 'block';
                    previewContent.innerHTML = `
                        <div class="alert alert-warning m-3">
                            <i class="fa fa-exclamation-triangle"></i>
                            Please paste a valid Google Maps iframe embed code
                        </div>
                    `;
                }
            });

            // Validate on paste
            mapInput.addEventListener('paste', function(e) {
                setTimeout(function() {
                    const embedCode = mapInput.value.trim();
                    if (embedCode && !embedCode.includes('iframe')) {
                        alert(
                            'Please paste the complete iframe embed code from Google Maps, not just a URL.'
                            );
                    }
                }, 100);
            });
        }
    });
</script>
