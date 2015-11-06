describe('db', function(){
	var db;
	beforeEach(function(pouchdb){
		db = pouchdb.create('testdb');
	});
	it('should save the model and return success',function(){
		expect(db.put({_id:'123456', first_name: 'Ezra', last_name: 'Obiwale', gender: 'Male'}).then(function(response){
			return 'success';
		}).catch(function(error){
			return 'failed';
		}).finally (function(){
			pouchdb.destroy('testdb');
		})).toEqual('success');
	});
});