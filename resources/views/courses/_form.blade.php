
<x-form-input
    name="name"
    label="Course Name"
    :value="$course->name"
/>

<x-form-textarea
    name="description"
    label="Description"
    :value="$course->description"
/>

<x-form-input
    name="duration"
    label="Duration (Weeks)"
    type="number"
    :value="$course->duration"
    min="1"
/>

<x-form-input
    name="fee"
    label="Course Fee"
    type="number"
    :value="$course->fee"
    min="0"
    step="0.01"
/>

<div class="form-group">
    <label for="difficulty">Difficulty</label>

    <select name="difficulty" id="difficulty" class="form-control">
        <option value="">Select Difficulty</option>

        @foreach (['Easy', 'Medium', 'Hard'] as $level)
            <option value="{{ $level }}"
                @selected(old('difficulty', $course->difficulty) === $level)>
                {{ $level }}
            </option>
        @endforeach
    </select>

    @error('difficulty')
        <span class="error">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="is_active">Course Status</label>

    <select name="is_active" id="is_active" class="form-control">
        <option value="1"
            @selected((string) old('is_active', $course->is_active ?? 1) === '1')>
            Active
        </option>

        <option value="0"
            @selected((string) old('is_active', $course->is_active ?? 1) === '0')>
            Inactive
        </option>
    </select>

    @error('is_active')
        <span class="error">{{ $message }}</span>
    @enderror
</div>
