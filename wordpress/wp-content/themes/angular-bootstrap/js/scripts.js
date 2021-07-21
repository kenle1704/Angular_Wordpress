var app = angular.module('wp', ['ngRoute','ngSanitize']);
app.config(function($routeProvider, $locationProvider) {
    $routeProvider
    .when('/', {
        templateUrl: localized.partials + 'main.html',
        controller: 'Main'
    })
    .when('/:slug', {
        templateUrl: localized.partials + 'content.html',
        controller: 'Content'
    })
    .otherwise({
    	templateUrl: localized.partials + 'content.html',
        controller: 'Content'
    });
	$locationProvider.html5Mode(true);
})
.controller('Main', function($scope, $http, $routeParams) {
	$http.get('wp-json/wp/v2/posts').then(function(res){
		$scope.posts = res.data;
	});
})
.controller('Content',
        ['$scope', '$http', '$routeParams', function($scope, $http, $routeParams) {
		$http.get('wp-json/wp/v2/posts?slug=' + $routeParams.slug).then(function(res){
                $scope.post = res.data[0];
            });
        }
    ]
);
