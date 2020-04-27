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
<div class="form-row align-items-center">
    <div class="form-group col-md-3">
        <label for="prep_time">Prep Time</label>
        <input type="text"
            class="form-control @error('title') is-invalid @enderror"
            id="prep_time"
            name="prep_time"
            aria-describedby="prep_timeHelp"
            value="{{ old('prep_time', isset($recipe->prep_time) ? $recipe->prep_time : '') }}">
            @error('prep_time')
                <small id="prep_timeHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="cook_time">Cook Time</label>
        <input type="text"
            class="form-control @error('cook_time') is-invalid @enderror"
            id="cook_time"
            name="cook_time"
            aria-describedby="cook_timeHelp"
            value="{{ old('cook_time', isset($recipe->cook_time) ? $recipe->cook_time : '') }}">
            @error('cook_time')
                <small id="cook_timeHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="servings">Servings</label>
        <input type="text"
            class="form-control @error('servings') is-invalid @enderror"
            id="servings"
            name="servings"
            aria-describedby="servingsHelp"
            value="{{ old('servings', isset($recipe->servings) ? $recipe->servings : '') }}">
            @error('servings')
                <small id="servingsHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="serving_size">Serving Size</label>
        <input type="text"
            class="form-control @error('serving_size') is-invalid @enderror"
            id="serving_size"
            name="serving_size"
            aria-describedby="serving_sizeHelp"
            value="{{ old('serving_size', isset($recipe->serving_size) ? $recipe->serving_size : '') }}">
            @error('serving_size')
                <small id="serving_sizeHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea
        class="form-control @error('description') is-invalid @enderror"
        id="description"
        name="description"
        aria-describedby="descriptionHelp"
        rows="3">{{ old('description', isset($recipe->description) ? $recipe->description : '') }}</textarea>
        @error('description')
            <small id="descriptionHelp" class="form-text text-danger">{{ $message }}</small>
        @enderror
</div>
<div class="form-group">
    <label for="tags">Tags</label>
    <select multiple class="form-control" id="tags" name="tags" data-role="tagsinput">
        <option value="0">Funday Friday</option>
        <option value="4">Favorite</option>
    </select>
</div>
<div class="card">
  <div class="card-header">
    <div class="d-flex justify-content-between">
        <h4 class="mt-2">Ingredients</h4>
        <button class="btn btn-primary btn-sm">Add New</button>
    </div>
  </div>
  <div class="card-body">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <span class="mr-1">X</span>
                    <h5 class="mb-1">Apple</h5>
                    <small class="ml-auto">100g</small>
                </div>
                <p class="mb-1">Sliced</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <span class="mr-1">X</span>
                    <h5 class="mb-1">Kodiak Cakes : Power Cakes</h5>
                    <small class="ml-auto">1 Cup</small>
                </div>
                <p class="mb-1"></p>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <span class="mr-1">X</span>
                    <h5 class="mb-1">McDonald's : Big Mac</h5>
                    <small class="ml-auto">1 Burger</small>
                </div>
                <p class="mb-1">Calories: 540kcal | Fat: 28.00g | Carbs: 46.00g | Protein: 25.00g</p>
            </a>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="directions">Directions</label>
    <textarea
        class="form-control @error('directions') is-invalid @enderror"
        id="directions"
        name="directions"
        aria-describedby="directionsHelp"
        rows="3">{{ old('directions', isset($recipe->directions) ? $recipe->directions : '') }}</textarea>
        @error('directions')
            <small id="directionsHelp" class="form-text text-danger">{{ $message }}</small>
        @enderror
</div>

<div class="form-row align-items-center">
    <div class="form-group col-md-3">
        <label for="calcium">Calcium</label>
        <input
            type="text"
            class="form-control text-right @error('calcium') is-invalid @enderror"
            id="calcium"
            name="calcium"
            aria-describedby="calciumHelp"
            placeholder="Enter Calcium"
            value="{{ old('calcium', isset($recipe->calcium) ? $recipe->calcium : '' ) }}">
            @error('calcium')
                <small id="calciumHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="calories">Calories</label>
        <input
            type="text"
            class="form-control text-right @error('calories') is-invalid @enderror"
            id="calories"
            name="calories"
            aria-describedby="caloriesHelp"
            placeholder="Enter Calories"
            value="{{ old( 'calories', isset($recipe->calories) ? $recipe->calories : '') }}">
            @error('calories')
                <small id="caloriesHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="carbohydrate">Carbohydrate</label>
        <input type="text"
            class="form-control text-right @error('title') is-invalid @enderror"
            id="carbohydrate"
            name="carbohydrate"
            placeholder="Enter Carbohydrate"
            aria-describedby="carbohydrateHelp"
            value="{{ old('carbohydrate', isset($recipe->carbohydrate) ? $recipe->carbohydrate : '') }}">
            @error('carbohydrate')
                <small id="carbohydrateHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="cholesterol">Cholesterol</label>
        <input type="text"
            class="form-control text-right @error('cholesterol') is-invalid @enderror"
            id="cholesterol"
            name="cholesterol"
            placeholder="Enter Cholesterol"
            aria-describedby="cholesterolHelp"
            value="{{ old('cholesterol', isset($recipe->cholesterol) ? $recipe->cholesterol : '') }}">
            @error('cholesterol')
                <small id="cholesterolHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
</div>
<div class="form-row align-items-center">
    <div class="form-group col-md-3">
        <label for="fat">Fat</label>
        <input type="text"
            class="form-control text-right @error('title') is-invalid @enderror"
            id="fat"
            name="fat"
            placeholder="Enter Fat"
            aria-describedby="fatHelp"
            value="{{ old('fat', isset($recipe->fat) ? $recipe->fat : '') }}">
            @error('fat')
                <small id="fatHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="fiber">Fiber</label>
        <input type="text"
            class="form-control text-right @error('fiber') is-invalid @enderror"
            id="fiber"
            name="fiber"
            placeholder="Enter Fiber"
            aria-describedby="fiberHelp"
            value="{{ old('fiber', isset($recipe->fiber) ? $recipe->fiber : '') }}">
            @error('fiber')
                <small id="fiberHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="iron">Iron</label>
        <input type="text"
            class="form-control text-right @error('iron') is-invalid @enderror"
            id="iron"
            name="iron"
            placeholder="Enter Iron"
            aria-describedby="ironHelp"
            value="{{ old('iron', isset($recipe->iron) ? $recipe->iron : '') }}">
            @error('iron')
                <small id="ironHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="monounsaturated_fat">Monounsaturated Fat</label>
        <input type="text"
            class="form-control text-right @error('monounsaturated_fat') is-invalid @enderror"
            id="monounsaturated_fat"
            name="monounsaturated_fat"
            placeholder="Enter Monounsaturated Fat"
            aria-describedby="monounsaturated_fatHelp"
            value="{{ old('monounsaturated_fat', isset($recipe->monounsaturated_fat) ? $recipe->monounsaturated_fat : '') }}">
            @error('monounsaturated_fat')
                <small id="monounsaturated_fatHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
</div>
<div class="form-row align-items-center">
    <div class="form-group col-md-3">
        <label for="polyunsaturated_fat">Polyunsaturated Fat</label>
        <input type="text"
            class="form-control text-right @error('title') is-invalid @enderror"
            id="polyunsaturated_fat"
            name="polyunsaturated_fat"
            placeholder="Enter Polyunsaturated Fat"
            aria-describedby="polyunsaturated_fatHelp"
            value="{{ old('polyunsaturated_fat', isset($recipe->polyunsaturated_fat) ? $recipe->polyunsaturated_fat : '') }}">
            @error('polyunsaturated_fat')
                <small id="polyunsaturated_fatHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="protein">Protein</label>
        <input type="text"
            class="form-control text-right @error('protein') is-invalid @enderror"
            id="protein"
            name="protein"
            placeholder="Enter Protein"
            aria-describedby="proteinHelp"
            value="{{ old('protein', isset($recipe->protein) ? $recipe->protein : '') }}">
            @error('protein')
                <small id="proteinHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="saturated_fat">Saturated Fat</label>
        <input type="text"
            class="form-control text-right @error('saturated_fat') is-invalid @enderror"
            id="saturated_fat"
            name="saturated_fat"
            placeholder="Enter Saturated Fat"
            aria-describedby="saturated_fatHelp"
            value="{{ old('saturated_fat', isset($recipe->saturated_fat) ? $recipe->saturated_fat : '') }}">
            @error('saturated_fat')
                <small id="saturated_fatHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="sodium">Sodium</label>
        <input type="text"
            class="form-control text-right @error('sodium') is-invalid @enderror"
            id="sodium"
            name="sodium"
            placeholder="Enter Sodium"
            aria-describedby="sodiumHelp"
            value="{{ old('sodium', isset($recipe->sodium) ? $recipe->sodium : '') }}">
            @error('sodium')
                <small id="sodiumHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
</div>
<div class="form-row align-items-center">
    <div class="form-group col-md-3">
        <label for="sugar">Sugar</label>
        <input type="text"
            class="form-control text-right @error('title') is-invalid @enderror"
            id="sugar"
            name="sugar"
            placeholder="Enter Sugar"
            aria-describedby="sugarHelp"
            value="{{ old('sugar', isset($recipe->sugar) ? $recipe->sugar : '') }}">
            @error('sugar')
                <small id="sugarHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="trans_fat">Trans Fat</label>
        <input type="text"
            class="form-control text-right @error('trans_fat') is-invalid @enderror"
            id="trans_fat"
            name="trans_fat"
            placeholder="Enter Trans Fat"
            aria-describedby="trans_fatHelp"
            value="{{ old('trans_fat', isset($recipe->trans_fat) ? $recipe->trans_fat : '') }}">
            @error('trans_fat')
                <small id="trans_fatHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="vitamin_a">Vitamin A</label>
        <input type="text"
            class="form-control text-right @error('vitamin_a') is-invalid @enderror"
            id="vitamin_a"
            name="vitamin_a"
            placeholder="Enter Vitamin A"
            aria-describedby="vitamin_aHelp"
            value="{{ old('vitamin_a', isset($recipe->vitamin_a) ? $recipe->vitamin_a : '') }}">
            @error('vitamin_a')
                <small id="vitamin_aHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="vitamin_c">Vitamin C</label>
        <input type="text"
            class="form-control text-right @error('vitamin_c') is-invalid @enderror"
            id="vitamin_c"
            name="vitamin_c"
            placeholder="Enter Vitamin C"
            aria-describedby="vitamin_cHelp"
            value="{{ old('vitamin_c', isset($recipe->vitamin_c) ? $recipe->vitamin_c : '') }}">
            @error('vitamin_c')
                <small id="vitamin_cHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
    </div>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
