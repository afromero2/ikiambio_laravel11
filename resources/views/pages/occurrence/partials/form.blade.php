@php use Illuminate\Support\Str; @endphp

<div class="row g-3">
  {{-- Claves "externas" y campos principales --}}
  <div class="col-md-4">
    <label class="label" for="occurrenceID">OccurrenceID</label>
    <input type="text" name="occurrenceID" id="occurrenceID" class="input"
           value="{{ old('occurrenceID', $item->occurrenceID ?? '') }}"
           placeholder="Ingrese su OccurrenceID">
    @error('occurrenceID') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-4">
    <label class="label" for="record_level_id">Record level</label>
    <select name="record_level_id" id="record_level_id" class="input">
      <option value="">— Selecciona —</option>
      @foreach($recordLevels as $opt)
        <option value="{{ $opt->record_level_id }}"
          @selected(old('record_level_id', $item->record_level_id ?? null) == $opt->record_level_id)>
          #{{ $opt->record_level_id }} @if($opt->datasetName ?? false) — {{ Str::limit($opt->datasetName, 40) }} @endif
        </option>
      @endforeach
    </select>
    @error('record_level_id') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-4">
    <label class="label" for="catalogNumber">Catalog Number</label>
    <input type="text" name="catalogNumber" id="catalogNumber" class="input"
           value="{{ old('catalogNumber', $item->catalogNumber ?? '') }}">
    @error('catalogNumber') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-4">
    <label class="label" for="recordNumber">Record Number</label>
    <input type="text" name="recordNumber" id="recordNumber" class="input"
           value="{{ old('recordNumber', $item->recordNumber ?? '') }}">
    @error('recordNumber') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-4">
    <label class="label" for="recordedBy">Recorded By</label>
    <input type="text" name="recordedBy" id="recordedBy" class="input"
           value="{{ old('recordedBy', $item->recordedBy ?? '') }}">
    @error('recordedBy') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-4">
    <label class="label" for="individualCount">Individual Count</label>
    <input type="number" name="individualCount" id="individualCount" class="input"
           value="{{ old('individualCount', $item->individualCount ?? '') }}">
    @error('individualCount') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-4">
    <label class="label" for="organismQuantity">Organism Quantity</label>
    <input type="number" step="any" name="organismQuantity" id="organismQuantity" class="input"
           value="{{ old('organismQuantity', $item->organismQuantity ?? '') }}">
    @error('organismQuantity') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  {{-- Vocabs obligatorias --}}
  <div class="col-md-4">
    <label class="label" for="organismQuantityType">Organism Quantity Type *</label>
    <select name="organismQuantityType" id="organismQuantityType" class="input">
      <option value="">— Selecciona —</option>
      @foreach($oqtypes as $opt)
        <option value="{{ $opt->oqtype_id }}"
          @selected(old('organismQuantityType', $item->organismQuantityType ?? null) == $opt->oqtype_id)>
          {{ $opt->oqtype_value }} @if($opt->description) — {{ Str::limit($opt->description, 50) }} @endif
        </option>
      @endforeach
    </select>
    @error('organismQuantityType') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-4">
    <label class="label" for="sex">Sex *</label>
    <select name="sex" id="sex" class="input">
      <option value="">— Selecciona —</option>
      @foreach($sexes as $opt)
        <option value="{{ $opt->sex_id }}"
          @selected(old('sex', $item->sex ?? null) == $opt->sex_id)>
          {{ $opt->sex_value }}
        </option>
      @endforeach
    </select>
    @error('sex') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-4">
    <label class="label" for="lifeStage">Life stage *</label>
    <select name="lifeStage" id="lifeStage" class="input">
      <option value="">— Selecciona —</option>
      @foreach($lifeStages as $opt)
        <option value="{{ $opt->lifestage_id }}"
          @selected(old('lifeStage', $item->lifeStage ?? null) == $opt->lifestage_id)>
          {{ $opt->lifestage_value }}
        </option>
      @endforeach
    </select>
    @error('lifeStage') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-4">
    <label class="label" for="reproductiveCondition">Reproductive condition *</label>
    <select name="reproductiveCondition" id="reproductiveCondition" class="input">
      <option value="">— Selecciona —</option>
      @foreach($reproConds as $opt)
        <option value="{{ $opt->reprocond_id }}"
          @selected(old('reproductiveCondition', $item->reproductiveCondition ?? null) == $opt->reprocond_id)>
          {{ $opt->reprocond_value }}
        </option>
      @endforeach
    </select>
    @error('reproductiveCondition') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-4">
    <label class="label" for="establishmentMeans">Establishment means *</label>
    <select name="establishmentMeans" id="establishmentMeans" class="input">
      <option value="">— Selecciona —</option>
      @foreach($estabMeans as $opt)
        <option value="{{ $opt->estabmeans_id }}"
          @selected(old('establishmentMeans', $item->establishmentMeans ?? null) == $opt->estabmeans_id)>
          {{ $opt->estabmeans_value }}
        </option>
      @endforeach
    </select>
    @error('establishmentMeans') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-4">
    <label class="label" for="disposition">Disposition *</label>
    <select name="disposition" id="disposition" class="input">
      <option value="">— Selecciona —</option>
      @foreach($dispositions as $opt)
        <option value="{{ $opt->disposition_id }}"
          @selected(old('disposition', $item->disposition ?? null) == $opt->disposition_id)>
          {{ $opt->disposition_value }}
        </option>
      @endforeach
    </select>
    @error('disposition') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  {{-- Textos largos --}}
  <div class="col-md-12">
    <label class="label" for="behavior">Behavior</label>
    <textarea name="behavior" id="behavior" rows="2" class="input">{{ old('behavior', $item->behavior ?? '') }}</textarea>
    @error('behavior') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-12">
    <label class="label" for="substrate">Substrate</label>
    <textarea name="substrate" id="substrate" rows="2" class="input">{{ old('substrate', $item->substrate ?? '') }}</textarea>
    @error('substrate') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-12">
    <label class="label" for="preparations">Preparations</label>
    <textarea name="preparations" id="preparations" rows="2" class="input">{{ old('preparations', $item->preparations ?? '') }}</textarea>
    @error('preparations') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  {{-- =================== Organism (ID + sub-form opcional) =================== --}}
  <div class="col-md-4">
    <label class="label" for="organismID">Organism ID</label>
    <input type="text" name="organismID" id="organismID" class="input"
           value="{{ old('organismID', $item->organismID ?? '') }}"
           placeholder="Deja vacío para autogenerar">
    @error('organismID') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-12">
    <label class="d-inline-flex align-items-center gap-2">
      <input type="checkbox" id="toggle-organism" name="organism_create" value="1"
             {{ old('organism_create') ? 'checked' : '' }}>
      <span>Crear/editar datos de <strong>Organism</strong> en este formulario</span>
    </label>
  </div>

  <div id="organism-subform" class="col-12" style="display:none; background-color:rgb(241, 219, 171)">
    <div class="row g-3 mt-1">
      <div class="col-md-12">
        <label class="label" for="organism_associatedOccurrences">Associated Occurrences</label>
        <textarea name="organism_associatedOccurrences" id="organism_associatedOccurrences" rows="2" class="input">{{ old('organism_associatedOccurrences') }}</textarea>
      </div>

      <div class="col-md-12">
        <label class="label" for="organism_associatedOrganisms">Associated Organisms</label>
        <textarea name="organism_associatedOrganisms" id="organism_associatedOrganisms" rows="2" class="input">{{ old('organism_associatedOrganisms') }}</textarea>
      </div>

      <div class="col-md-12">
        <label class="label" for="organism_previousIdentifications">Previous Identifications</label>
        <textarea name="organism_previousIdentifications" id="organism_previousIdentifications" rows="2" class="input">{{ old('organism_previousIdentifications') }}</textarea>
      </div>
    </div>
  </div>

  {{-- =================== Location (ID + sub-form opcional placeholder) =================== --}}
  <div class="col-md-4">
    <label class="label" for="locationID">Location ID</label>
    <input type="text" name="locationID" id="locationID" class="input"
           value="{{ old('locationID', $item->locationID ?? '') }}"
           placeholder="Deja vacío para autogenerar">
    @error('locationID') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-12">
    <label class="d-inline-flex align-items-center gap-2">
      <input type="checkbox" id="toggle-location" name="location_create" value="1"
             {{ old('location_create') ? 'checked' : '' }}>
      <span>Crear/editar datos de <strong>Location</strong> aquí (por ahora solo el ID)</span>
    </label>
  </div>

  <div id="location-subform" class="col-12" style="display:none; background-color:rgb(241, 219, 171)">
    <div class="alert alert-info mt-2">
      Actualmente solo se registrará el <strong>locationID</strong>. Agrega aquí campos extra cuando los definas.
    </div>
  </div>

  {{-- =================== Taxon (ID + sub-form opcional placeholder) =================== --}}
  <div class="col-md-4">
    <label class="label" for="taxonID">Taxon ID</label>
    <input type="text" name="taxonID" id="taxonID" class="input
           " value="{{ old('taxonID', $item->taxonID ?? '') }}"
           placeholder="Deja vacío para autogenerar">
    @error('taxonID') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-12">
    <label class="d-inline-flex align-items-center gap-2">
      <input type="checkbox" id="toggle-taxon" name="taxon_create" value="1"
             {{ old('taxon_create') ? 'checked' : '' }}>
      <span>Crear/editar datos de <strong>Taxon</strong> aquí (por ahora solo el ID)</span>
    </label>
  </div>

  <div id="taxon-subform" class="col-12" style="display:none; background-color:rgb(241, 219, 171)">
    <div class="alert alert-info mt-2">
      Actualmente solo se registrará el <strong>taxonID</strong>. Agrega aquí campos extra cuando los definas.
    </div>
  </div>

  {{-- =================== Identification (ID + sub-form opcional placeholder) =================== --}}
  <div class="col-md-4">
    <label class="label" for="identificationID">Identification ID</label>
    <input type="text" name="identificationID" id="identificationID" class="input"
           value="{{ old('identificationID', $item->identificationID ?? '') }}"
           placeholder="Deja vacío para autogenerar">
    @error('identificationID') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-12">
    <label class="d-inline-flex align-items-center gap-2">
      <input type="checkbox" id="toggle-identification" name="identification_create" value="1"
             {{ old('identification_create') ? 'checked' : '' }}>
      <span>Crear/editar datos de <strong>Identification</strong> aquí (por ahora solo el ID)</span>
    </label>
  </div>

  <div id="identification-subform" class="col-12" style="display:none; background-color:rgb(241, 219, 171)">
    <div class="alert alert-info mt-2">
      Actualmente solo se registrará el <strong>identificationID</strong>. Agrega aquí campos extra cuando los definas.
    </div>
  </div>

  {{-- Asociados (texto largos) --}}
  <div class="col-md-12">
    <label class="label" for="associatedMedia">Associated media</label>
    <textarea name="associatedMedia" id="associatedMedia" rows="2" class="input">{{ old('associatedMedia', $item->associatedMedia ?? '') }}</textarea>
    @error('associatedMedia') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-12">
    <label class="label" for="associatedSequences">Associated sequences</label>
    <textarea name="associatedSequences" id="associatedSequences" rows="2" class="input">{{ old('associatedSequences', $item->associatedSequences ?? '') }}</textarea>
    @error('associatedSequences') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-12">
    <label class="label" for="associatedTaxa">Associated taxa</label>
    <textarea name="associatedTaxa" id="associatedTaxa" rows="2" class="input">{{ old('associatedTaxa', $item->associatedTaxa ?? '') }}</textarea>
    @error('associatedTaxa') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-12">
    <label class="label" for="otherCatalogNumbers">Other catalog numbers</label>
    <textarea name="otherCatalogNumbers" id="otherCatalogNumbers" rows="2" class="input">{{ old('otherCatalogNumbers', $item->otherCatalogNumbers ?? '') }}</textarea>
    @error('otherCatalogNumbers') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-12">
    <label class="label" for="occurrenceRemarks">Occurrence remarks</label>
    <textarea name="occurrenceRemarks" id="occurrenceRemarks" rows="2" class="input">{{ old('occurrenceRemarks', $item->occurrenceRemarks ?? '') }}</textarea>
    @error('occurrenceRemarks') <small class="text-danger">{{ $message }}</small> @enderror
  </div>
</div>

@push('scripts')
<script>
(function () {
  function setupToggle(chkId, boxId, hasData) {
    const chk = document.getElementById(chkId);
    const box = document.getElementById(boxId);
    if (!chk || !box) return;
    const show = () => { box.style.display = chk.checked ? '' : 'none'; };
    chk.addEventListener('change', show);
    if (chk.checked || hasData) chk.checked = true;
    show();
  }

  // Detecta si el sub-form de Organism ya tiene contenido para abrirlo
  const orgHasData =
    !!document.getElementById('organism_associatedOccurrences')?.value ||
    !!document.getElementById('organism_associatedOrganisms')?.value ||
    !!document.getElementById('organism_previousIdentifications')?.value;

  setupToggle('toggle-organism', 'organism-subform', orgHasData);
  setupToggle('toggle-location', 'location-subform', false);
  setupToggle('toggle-taxon', 'taxon-subform', false);
  setupToggle('toggle-identification', 'identification-subform', false);
})();
</script>
@endpush
