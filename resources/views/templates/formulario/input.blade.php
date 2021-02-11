<label class="{{ $class ?? null }}">
  <span>{{ $label ?? $input ?? "ERROR" }}</span>
  {!! Form::text($input, $value ?? null, $attributes) !!}
</label>
