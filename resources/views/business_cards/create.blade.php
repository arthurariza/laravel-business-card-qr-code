<x-layout>
    <h1>QR Code Image Generator</h1>

    <form action="{{ route('business-cards.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">

            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="github_url">Github Url</label>
            <input type="text" name="github_url" id="github_url" value="{{ old('github_url') }}">

            @error('github_url')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="linkedin_url">Linkedin Url</label>
            <input type="text" name="linkedin_url" id="linkedin_url" value="{{ old('linkedin_url') }}">

            @error('linkedin_url')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Generate Image</button>
    </form>
</x-layout>
