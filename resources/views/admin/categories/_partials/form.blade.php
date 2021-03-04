@csrf
<div class="form-group">
    <input type="text" name="tx_title" value="{{ $category->tx_title ?? old('tx_title') }}" class="form-control" placeholder="Título">
</div>
<div class="form-group">
    <input type="text" name="tx_url" value="{{ $category->tx_url ?? old('tx_url') }}" class="form-control" placeholder="URL">
</div>
<div class="form-group">
    <textarea type="text" name="tx_description" class="form-control"
        placeholder="Descrição">{{ $category->tx_description ?? old('tx_description') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success">Salvar</button>
</div>
