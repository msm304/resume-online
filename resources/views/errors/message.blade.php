   @if(session('failed'))
      <div class="alert alert-danger bg-red-600">{{ session('failed') }}</div>
@endif
        @if(session('success'))
              <div class="bg-blue-600 px-3 py-3 mb-3">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
              <div class="bg-blue-600 px-3 py-3 mb-3">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
        @endif