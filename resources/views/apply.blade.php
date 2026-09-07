@extends('layouts.app')

@section('title', $title)

@section('content')

@if($position)
<section class="apply-job-info">
    <div class="container">
        <div class="apply-job-header">
            <h2>Applying for: {{ $position }}</h2>
            <div class="apply-job-links">
                <a href="{{ route('home') }}" class="btn-secondary">&larr; Back to Home</a>
                <a href="{{ route('careers') }}" class="btn-secondary">&larr; Back to Careers</a>
            </div>
        </div>
    </div>
</section>
@endif

<section class="apply-form-section">
    <div class="container">
        <h1>Job Application Form</h1>

        <form action="/careers/apply" method="POST">
            @csrf

            <p>
                <label for="full_name">Full Name</label>
                <input
                    type="text"
                    id="full_name"
                    name="full_name"
                    value="{{ old('full_name') }}"
                    class="@error('full_name') error-input @enderror">
                @error('full_name')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </p>

            <p>
                <label for="email">Email Address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="@error('email') error-input @enderror">
                @error('email')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </p>

            <p>
                <label for="phone">Phone Number</label>
                <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="{{ old('phone') }}"
                    class="@error('phone') error-input @enderror">
                @error('phone')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </p>

            <p>
                <label for="county">County</label>
                <select
                    id="county"
                    name="county"
                    class="@error('county') error-input @enderror">
                    <option value="">-- Select County --</option>
                    <option value="Mombasa" {{ old('county') == 'Mombasa' ? 'selected' : '' }}>Mombasa</option>
                    <option value="Kwale" {{ old('county') == 'Kwale' ? 'selected' : '' }}>Kwale</option>
                    <option value="Kilifi" {{ old('county') == 'Kilifi' ? 'selected' : '' }}>Kilifi</option>
                    <option value="Tana River" {{ old('county') == 'Tana River' ? 'selected' : '' }}>Tana River</option>
                    <option value="Lamu" {{ old('county') == 'Lamu' ? 'selected' : '' }}>Lamu</option>
                    <option value="Taita-Taveta" {{ old('county') == 'Taita-Taveta' ? 'selected' : '' }}>Taita-Taveta</option>
                    <option value="Garissa" {{ old('county') == 'Garissa' ? 'selected' : '' }}>Garissa</option>
                    <option value="Wajir" {{ old('county') == 'Wajir' ? 'selected' : '' }}>Wajir</option>
                    <option value="Mandera" {{ old('county') == 'Mandera' ? 'selected' : '' }}>Mandera</option>
                    <option value="Marsabit" {{ old('county') == 'Marsabit' ? 'selected' : '' }}>Marsabit</option>
                    <option value="Isiolo" {{ old('county') == 'Isiolo' ? 'selected' : '' }}>Isiolo</option>
                    <option value="Meru" {{ old('county') == 'Meru' ? 'selected' : '' }}>Meru</option>
                    <option value="Tharaka-Nithi" {{ old('county') == 'Tharaka-Nithi' ? 'selected' : '' }}>Tharaka-Nithi</option>
                    <option value="Embu" {{ old('county') == 'Embu' ? 'selected' : '' }}>Embu</option>
                    <option value="Kitui" {{ old('county') == 'Kitui' ? 'selected' : '' }}>Kitui</option>
                    <option value="Machakos" {{ old('county') == 'Machakos' ? 'selected' : '' }}>Machakos</option>
                    <option value="Makueni" {{ old('county') == 'Makueni' ? 'selected' : '' }}>Makueni</option>
                    <option value="Nyandarua" {{ old('county') == 'Nyandarua' ? 'selected' : '' }}>Nyandarua</option>
                    <option value="Nyeri" {{ old('county') == 'Nyeri' ? 'selected' : '' }}>Nyeri</option>
                    <option value="Kirinyaga" {{ old('county') == 'Kirinyaga' ? 'selected' : '' }}>Kirinyaga</option>
                    <option value="Murang'a" {{ old('county') == "Murang'a" ? 'selected' : '' }}>Murang'a</option>
                    <option value="Kiambu" {{ old('county') == 'Kiambu' ? 'selected' : '' }}>Kiambu</option>
                    <option value="Turkana" {{ old('county') == 'Turkana' ? 'selected' : '' }}>Turkana</option>
                    <option value="West Pokot" {{ old('county') == 'West Pokot' ? 'selected' : '' }}>West Pokot</option>
                    <option value="Samburu" {{ old('county') == 'Samburu' ? 'selected' : '' }}>Samburu</option>
                    <option value="Trans Nzoia" {{ old('county') == 'Trans Nzoia' ? 'selected' : '' }}>Trans Nzoia</option>
                    <option value="Uasin Gishu" {{ old('county') == 'Uasin Gishu' ? 'selected' : '' }}>Uasin Gishu</option>
                    <option value="Elgeyo-Marakwet" {{ old('county') == 'Elgeyo-Marakwet' ? 'selected' : '' }}>Elgeyo-Marakwet</option>
                    <option value="Nandi" {{ old('county') == 'Nandi' ? 'selected' : '' }}>Nandi</option>
                    <option value="Baringo" {{ old('county') == 'Baringo' ? 'selected' : '' }}>Baringo</option>
                    <option value="Laikipia" {{ old('county') == 'Laikipia' ? 'selected' : '' }}>Laikipia</option>
                    <option value="Nakuru" {{ old('county') == 'Nakuru' ? 'selected' : '' }}>Nakuru</option>
                    <option value="Narok" {{ old('county') == 'Narok' ? 'selected' : '' }}>Narok</option>
                    <option value="Kajiado" {{ old('county') == 'Kajiado' ? 'selected' : '' }}>Kajiado</option>
                    <option value="Kericho" {{ old('county') == 'Kericho' ? 'selected' : '' }}>Kericho</option>
                    <option value="Bomet" {{ old('county') == 'Bomet' ? 'selected' : '' }}>Bomet</option>
                    <option value="Kakamega" {{ old('county') == 'Kakamega' ? 'selected' : '' }}>Kakamega</option>
                    <option value="Vihiga" {{ old('county') == 'Vihiga' ? 'selected' : '' }}>Vihiga</option>
                    <option value="Bungoma" {{ old('county') == 'Bungoma' ? 'selected' : '' }}>Bungoma</option>
                    <option value="Busia" {{ old('county') == 'Busia' ? 'selected' : '' }}>Busia</option>
                    <option value="Siaya" {{ old('county') == 'Siaya' ? 'selected' : '' }}>Siaya</option>
                    <option value="Kisumu" {{ old('county') == 'Kisumu' ? 'selected' : '' }}>Kisumu</option>
                    <option value="Homa Bay" {{ old('county') == 'Homa Bay' ? 'selected' : '' }}>Homa Bay</option>
                    <option value="Migori" {{ old('county') == 'Migori' ? 'selected' : '' }}>Migori</option>
                    <option value="Kisii" {{ old('county') == 'Kisii' ? 'selected' : '' }}>Kisii</option>
                    <option value="Nyamira" {{ old('county') == 'Nyamira' ? 'selected' : '' }}>Nyamira</option>
                    <option value="Nairobi" {{ old('county') == 'Nairobi' ? 'selected' : '' }}>Nairobi</option>
                </select>
                @error('county')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </p>

            <p>
                <label for="education">Highest Level of Education</label>
                <select
                    id="education"
                    name="education"
                    class="@error('education') error-input @enderror">
                    <option value="">-- Select Education Level --</option>
                    <option value="KCSE" {{ old('education') == 'KCSE' ? 'selected' : '' }}>KCSE</option>
                    <option value="Certificate" {{ old('education') == 'Certificate' ? 'selected' : '' }}>Certificate</option>
                    <option value="Diploma" {{ old('education') == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                    <option value="Bachelor's Degree" {{ old('education') == "Bachelor's Degree" ? 'selected' : '' }}>Bachelor's Degree</option>
                    <option value="Master's Degree" {{ old('education') == "Master's Degree" ? 'selected' : '' }}>Master's Degree</option>
                    <option value="PhD" {{ old('education') == 'PhD' ? 'selected' : '' }}>PhD</option>
                </select>
                @error('education')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </p>

            <p>
                <label for="experience">Years of Experience</label>
                <input
                    type="number"
                    id="experience"
                    name="experience"
                    value="{{ old('experience') }}"
                    class="@error('experience') error-input @enderror">
                @error('experience')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </p>

            <p>
                <label for="position">Position Applying For</label>
                <select
                    id="position"
                    name="position"
                    class="@error('position') error-input @enderror">
                    <option value="">-- Select Position --</option>
                    <option value="Data Analyst" {{ old('position') == 'Data Analyst' || $position == 'Data Analyst' ? 'selected' : '' }}>Data Analyst</option>
                    <option value="Laravel Developer" {{ old('position') == 'Laravel Developer' || $position == 'Laravel Developer' ? 'selected' : '' }}>Laravel Developer</option>
                    <option value="Office Administrator" {{ old('position') == 'Office Administrator' || $position == 'Office Administrator' ? 'selected' : '' }}>Office Administrator</option>
                    <option value="Customer Support Officer" {{ old('position') == 'Customer Support Officer' || $position == 'Customer Support Officer' ? 'selected' : '' }}>Customer Support Officer</option>
                </select>
                @error('position')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </p>

            <p>
                <label for="salary">Expected Salary (KES)</label>
                <input
                    type="number"
                    id="salary"
                    name="salary"
                    value="{{ old('salary') }}"
                    class="@error('salary') error-input @enderror">
                @error('salary')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </p>

            <p class="full-width">
                <label for="cover_letter">Cover Letter</label>
                <textarea
                    id="cover_letter"
                    name="cover_letter"
                    rows="6"
                    class="@error('cover_letter') error-input @enderror">{{ old('cover_letter') }}</textarea>
                @error('cover_letter')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </p>

            <div class="form-actions">
                <button type="submit" class="btn-primary">Submit Application</button>
            </div>

        </form>
    </div>
</section>

@endsection
