<div class="form-group">
    <label for="name">Company name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?: $company->name }}">
    @if ($errors->has('name'))
        <div class="errors">
            {{ $errors->first('name') }}
        </div>
    @endif
    <small class="form-text text-muted">Company name.</small>
</div>

<div class="form-group">
    <label for="symbol">Company symbol in GPW</label>
    <input type="text" class="form-control" id="symbol" name="symbol" value="{{ old('symbol') ?: $company->symbol }}">
    @if ($errors->has('symbol'))
        <div class="errors">
            {{ $errors->first('symbol') }}
        </div>
    @endif
    <small class="form-text text-muted">Company symbol in GWP - eg. for QubicGames SA it is QUB.</small>
</div>

<div class="form-group">
    <label for="link">Company link</label>
    <input type="text" class="form-control" id="link" name="link" value="{{ old('link') ?: $company->link }}">
    @if ($errors->has('link'))
        <div class="errors">
            {{ $errors->first('link') }}
        </div>
    @endif
    <small class="form-text text-muted">
        Company link to quotes on bankier.pl domain. App is able to load quotes from this domain.
    </small>
</div>
