<?php
session_start();
$this->title = "Neue Publikation"; ?>

<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label text-success">Titel oder Thema *</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" required
        name="title">
</div>
<div class="mb-3 text-success">
    <label for="exampleFormControlTextarea1" class="form-label">Beschreibung *</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" required name="description"></textarea>
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-success mb-3" name="submit">Veröffentlichen</button>
</div>