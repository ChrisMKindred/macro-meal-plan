<div class="form-group">
    <label for="title">Title</label>
    <input type="text"
        class="form-control @error('title') is-invalid @enderror"
        id="title"
        name="title"
        aria-describedby="titleHelp"
        value="{{ old('title', isset($recipe->title) ? $recipe->title : '') }}">
        @error('title')
            <small id="tileHelp" class="form-text text-danger">{{ $message }}</small>
        @enderror
</div>
<div class="form-group">
    <label for="calories">Calories</label>
    <input
        type="text"
        class="form-control @error('calories') is-invalid @enderror"
        id="calories"
        name="calories"
        aria-describedby="caloriesHelp"
        placeholder="Enter Calories"
        value="{{ old('calories', isset($recipe->calories) ? $recipe->calories : '' ) }}">
        @error('calories')
            <small id="caloriesHelp" class="form-text text-danger">{{ $message }}</small>
        @enderror
</div>
<div class="form-group">
    <label for="fat">Fat</label>
    <input
        type="text"
        class="form-control @error('fat') is-invalid @enderror"
        id="fat"
        name="fat"
        aria-describedby="fatHelp"
        placeholder="Enter fat"
        value="{{ old( 'fat', isset($recipe->fat) ? $recipe->fat : '') }}">
        @error('fat')
            <small id="fatHelp" class="form-text text-danger">{{ $message }}</small>
        @enderror
</div>
<div class="form-group">
    <label for="carbohydrate">Carbohydrate</label>
    <input
        type="text"
        class="form-control @error('carbohydrate') is-invalid @enderror"
        id="carbohydrate"
        name="carbohydrate"
        aria-describedby="carbsHelp"
        placeholder="Enter Carbs"
        value="{{ old('carbohydrate', isset($recipe->carbohydrate) ? $recipe->carbohydrate : '') }}">
        @error('carbohydrate')
            <small id="carbsHelp" class="form-text text-danger">{{ $message }}</small>
        @enderror
</div>
<div class="form-group">
    <label for="sugar">Sugar</label>
    <input
        type="text"
        class="form-control @error('sugar') is-invalid @enderror"
        id="sugar"
        name="sugar"
        aria-describedby="sugarHelp"
        placeholder="Enter Sugar"
        value="{{ old('sugar', isset($recipe->sugar) ? $recipe->sugar : '') }}">
        @error('sugar')
            <small id="sugarHelp" class="form-text text-danger">{{ $message }}</small>
        @enderror
</div>
<div class="form-group is-invalid">
    <label for="protein">Protein</label>
    <input
        type="text"
        class="form-control @error('protein') is-invalid @enderror"
        id="protein"
        name="protein"
        aria-describedby="proteinHelp"
        placeholder="Enter protein"
        value="{{ old('protein', isset($recipe->protein) ? $recipe->protein : '') }}">
        @error('protein')
            <small id="proteinHelp" class="form-text text-danger">{{ $message }}</small>
        @enderror
</div>
<button type="submit" class="btn btn-primary">Submit</button>
