<template>
    <div id="filters_block">
        <b>Filter by:</b>
        <form method="GET" :action="url">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card-body">
                        Age:
                        <div id="age_slider" class="my_slider">
                        </div>
                        <div class="form-group row div_range">
                            <input name="age_from" id="age_from" type="range" min="18" max="55" value="0" step="1"
                                   onsubmit="return false" oninput="level_age_from.value = age_from.valueAsNumber">
                            <output for="age_from" name="level_age_from">18</output>
                            <input name="age_to" id="age_to" type="range" min="18" max="55" value="55" step="1"
                                   onsubmit="return false" oninput="level_age_to.value = age_to.valueAsNumber">
                            <output for="age_to" name="level_age_to">55</output>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card-body">
                        Rating:
                        <div id="rating_slider" class="my_slider">
                        </div>
                        <div class="form-group row div_range">
                            <input name="rating_from" id="rating_from" type="range" min="0" max="100" value="0" step="1"
                                   onsubmit="return false" oninput="level_rating_from.value = rating_from.valueAsNumber">
                            <output for="rating_from" name="level_rating_from">0</output>
                            <input name="rating_to" id="rating_to" type="range" min="0" max="100" value="100" step="1"
                                   onsubmit="return false" oninput="level_rating_to.value = rating_to.valueAsNumber">
                            <output for="rating_to" name="level_rating_to">100</output>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card-body">
                        Distance:
                        <div id="distance_slider" class="my_slider">
                        </div>
                        <div class="form-group row div_range">
                            <input name="distance_from" id="distance_from" type="range" min="0" max="500" value="0" step="1"
                                   onsubmit="return false" oninput="level_distance_from.value = distance_from.valueAsNumber">
                            <output for="distance_from" name="level_distance_from">0</output>km
                            <input name="distance_to" id="distance_to" type="range" min="0" max="500" value="30" step="1"
                                   onsubmit="return false" oninput="level_distance_to.value = distance_to.valueAsNumber">
                            <output for="distance_to" name="level_distance_to">30</output>km
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card-body">
                        Common interests:
                        <div id="interests_slider" class="my_slider">
                        </div>
                        <div class="form-group row div_range">
                            <input name="interests_from" id="interests_from" type="range" min="0" max="20" value="0" step="1"
                                   onsubmit="return false" oninput="level_interests_from.value = interests_from.valueAsNumber">
                            <output for="interests_from" name="level_interests_from">0</output>
                            <input name="interests_to" id="interests_to" type="range" min="0" max="20" value="20" step="1"
                                   onsubmit="return false" oninput="level_interests_to.value = interests_to.valueAsNumber">
                            <output for="interests_to" name="level_interests_to">20</output>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <b>Sorting by:</b>
                    <div class="card-body">
                        <div class="form-group row">
                            <select class="form-control" name="sort">
                                <option value="age">age</option>
                                <option value="distance">distance</option>
                                <option value="rating">rating</option>
                                <option value="interests">interests</option>
                            </select>
                            <select class="form-control" name="order">
                                <option value="ascending">min to max</option>
                                <option value="descending">max to min</option>
                            </select>
                        </div>
                    </div>
                    <b>Profiles per page:</b>
                    <div class="card-body">
                        <div class="form-group row">
                            <select class="form-control" name="profiles_per_page">
                                <option value="6">6</option>
                                <option value="12">12</option>
                                <option value="24">24</option>
                                <option value="all">all profiles at once</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <button type="submit" class="btn btn-primary">OK</button>
        </form>
    </div>
</template>

<script>
    export default {
        props : [
            'url'
        ],
        mounted() {
            let ageSlider = document.getElementById('age_slider');
            let ratingSlider = document.getElementById('rating_slider');
            let distanceSlider = document.getElementById('distance_slider');
            let interestsSlider = document.getElementById('interests_slider');


            noUiSlider.create(ageSlider, {
                start: [20, 35],
                connect: true,
                tooltips: true,
                step: 1,
                format: {
                    from: function(value) {
                        return parseInt(value);
                    },
                    to: function(value) {
                        return parseInt(value);
                    }
                },
                range: {
                    'min': 18,
                    'max': 55
                }
            });
            noUiSlider.create(ratingSlider, {
                start: [10, 30],
                connect: true,
                tooltips: true,
                step: 0.5,
                range: {
                    'min': 0,
                    'max': 100
                }
            });
            noUiSlider.create(distanceSlider, {
                start: [10, 90],
                connect: true,
                tooltips: true,
                format: {
                    from: function(value) {
                        return parseInt(value);
                    },
                    to: function(value) {
                        return parseInt(value);
                    }
                },
                step: 5,
                range: {
                    'min': 0,
                    'max': 100
                }
            });
            noUiSlider.create(interestsSlider, {
                start: [0, 10],
                connect: true,
                tooltips: true,
                format: {
                    from: function(value) {
                        return parseInt(value);
                    },
                    to: function(value) {
                        return parseInt(value);
                    }
                },
                step: 1,
                range: {
                    'min': 0,
                    'max': 20
                }
            });

            let age_data = ageSlider.noUiSlider.get();
            document.getElementById('age_from').value = age_data[0];
            document.getElementById('age_to').value = age_data[1];

            let rating_data = ratingSlider.noUiSlider.get();
            document.getElementById('rating_from').value = rating_data[0];
            document.getElementById('rating_to').value = rating_data[1];

            let distance_data = distanceSlider.noUiSlider.get();
            document.getElementById('distance_from').value = distance_data[0];
            document.getElementById('distance_to').value = distance_data[1];

            let interests_data = interestsSlider.noUiSlider.get();
            document.getElementById('interests_from').value = interests_data[0];
            document.getElementById('interests_to').value = interests_data[1];

            ageSlider.noUiSlider.on('change.one', function () {
                let from_to = ageSlider.noUiSlider.get();
                console.log(ageSlider.noUiSlider.get());
                document.getElementById('age_from').value = from_to[0];
                document.getElementById('age_to').value = from_to[1];
            });

            ratingSlider.noUiSlider.on('change.one', function () {
                let from_to = ratingSlider.noUiSlider.get();
                document.getElementById('rating_from').value = from_to[0];
                document.getElementById('rating_to').value = from_to[1];
            });

            distanceSlider.noUiSlider.on('change.one', function () {
                let from_to = distanceSlider.noUiSlider.get();
                document.getElementById('distance_from').value = from_to[0];
                document.getElementById('distance_to').value = from_to[1];
            });

            interestsSlider.noUiSlider.on('change.one', function () {
                let from_to = interestsSlider.noUiSlider.get();
                document.getElementById('interests_from').value = from_to[0];
                document.getElementById('interests_to').value = from_to[1];
            });
        }

    }
</script>

<style scoped>

</style>