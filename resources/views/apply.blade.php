@extends('layouts.app')

@section('content')

<h1>Job Application Form</h1>

<form action="/careers/apply" method="POST">
    @csrf

    <p>
    <label for="full_name">Full Name</label><br>

    <input
        type="text"
        id="full_name"
        name="full_name"
        value="{{ old('full_name') }}"
        class="@error('full_name') error-input @enderror">

    @error('full_name')
        <p style="color:red;">{{ $message }}</p>
    @enderror
</p>

    <p>
    <label for="email">Email Address</label><br>

    <input
        type="email"
        id="email"
        name="email"
        value="{{ old('email') }}"
        class="@error('email') error-input @enderror">

    @error('email')
        <p style="color:red;">{{ $message }}</p>
    @enderror
</p>

    <p>
        <label for="phone">Phone Number</label><br>
        <input
            type="text"
            id="phone"
            name="phone"
            value="{{ old('phone') }}"
            class="@error('phone') error-input @enderror">

        @error('phone')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </p>

    <p>
    <label for="county">County</label><br>

    <select
        id="county"
        name="county"
        class="@error('county') error-input @enderror">

        <option value="">-- Select County --</option>

        <option value="Nairobi" {{ old('county') == 'Nairobi' ? 'selected' : '' }}>
            Nairobi
        </option>

        <option value="Kiambu" {{ old('county') == 'Kiambu' ? 'selected' : '' }}>
            Kiambu
        </option>

        <option value="Nakuru" {{ old('county') == 'Nakuru' ? 'selected' : '' }}>
            Nakuru
        </option>

        <option value="Mombasa" {{ old('county') == 'Mombasa' ? 'selected' : '' }}>
            Mombasa
        </option>

        <option value="Machakos" {{ old('county') == 'Machakos' ? 'selected' : '' }}>
            Machakos
</option>

    </select>

    @error('county')
        <p style="color:red;">{{ $message }}</p>
    @enderror
<p>
    <label for="education">Highest Level of Education</label><br>

    <select
        id="education"
        name="education"
        class="@error('education') error-input @enderror">

        <option value="">-- Select Education Level --</option>

        <option value="KCSE" {{ old('education') == 'KCSE' ? 'selected' : '' }}>
            KCSE
        </option>

        <option value="Certificate" {{ old('education') == 'Certificate' ? 'selected' : '' }}>
            Certificate
        </option>

        <option value="Diploma" {{ old('education') == 'Diploma' ? 'selected' : '' }}>
            Diploma
        </option>

        <option value="Bachelor's Degree" {{ old('education') == "Bachelor's Degree" ? 'selected' : '' }}>
            Bachelor's Degree
        </option>

        <option value="Master's Degree" {{ old('education') == "Master's Degree" ? 'selected' : '' }}>
            Master's Degree
        </option>

        <option value="PhD" {{ old('education') == 'PhD' ? 'selected' : '' }}>
            PhD
        </option>

    </select>

    @error('education')
        <p style="color:red;">{{ $message }}</p>
    @enderror
</p>

    <p>
    <label for="experience">Years of Experience</label><br>

    <input
        type="number"
        id="experience"
        name="experience"
        value="{{ old('experience') }}"
        class="@error('experience') error-input @enderror">

    @error('experience')
        <p style="color:red;">{{ $message }}</p>
    @enderror
</p>

    <p>
    <label for="position">Position Applying For</label><br>

    <select
        id="position"
        name="position"
        class="@error('position') error-input @enderror">

        <option value="">-- Select Position --</option>

        <option value="Data Analyst" {{ old('position') == 'Data Analyst' ? 'selected' : '' }}>
            Data Analyst
        </option>

        <option value="Laravel Developer" {{ old('position') == 'Laravel Developer' ? 'selected' : '' }}>
            Laravel Developer
        </option>

        <option value="Office Administrator" {{ old('position') == 'Office Administrator' ? 'selected' : '' }}>
            Office Administrator
        </option>

        <option value="Customer Support Officer" {{ old('position') == 'Customer Support Officer' ? 'selected' : '' }}>
            Customer Support Officer
        </option>

    </select>

    @error('position')
        <p style="color:red;">{{ $message }}</p>
    @enderror
</p>

    <p>
    <label for="salary">Expected Salary (KES)</label><br>

    <input
        type="number"
        id="salary"
        name="salary"
        value="{{ old('salary') }}"
        class="@error('salary') error-input @enderror">

    @error('salary')
        <p style="color:red;">{{ $message }}</p>
    @enderror
</p>

    <p>
    <label for="cover_letter">Cover Letter</label><br>

    <textarea
        id="cover_letter"
        name="cover_letter"
        rows="8"
        class="@error('cover_letter') error-input @enderror">{{ old('cover_letter') }}</textarea>

    @error('cover_letter')
        <p style="color:red;">{{ $message }}</p>
    @enderror
</p>

    <button>Submit Application</button>

</form>

@endsection
