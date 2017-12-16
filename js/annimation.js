/****************************
*														*
* 	 File: annimation.js		*
*														*
****************************/

// J'ai voulu me faire plaise en ajoutant une petite annimation js, pck notre site est mort en index

var camera, scene, renderer;
var geometry, material, mesh;

function init(x) {
	renderer = new THREE.CanvasRenderer();
	renderer.setSize(window.innerWidth, window.innerHeight);
	document.body.appendChild(renderer.domElement);
	camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 1, 1000);
	camera.position.z = 500;
	scene = new THREE.Scene();
	geometry = new THREE.CubeGeometry(x, x, x);
	material = new THREE.MeshBasicMaterial({ color: 0xCCCCCC, wireframe: true, wireframeLinewidth: 2 });
	mesh = new THREE.Mesh(geometry, material);
	scene.add(mesh);
}

function animate() {
	requestAnimationFrame(animate);
	mesh.rotation.x = Date.now() * 0.0005;
	mesh.rotation.y = Date.now() * 0.001;
	renderer.render(scene, camera);
}

init(200);
animate();

// END
