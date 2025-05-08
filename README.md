# Routes and Purpose
- To add students
    SSDFG
  ```
  Route::get('/students', [StudInsertController::class, 'create']);
  Route::post('/students', [StudInsertController::class, 'store'])->name('student.store');
  ```
- To delete students  
  ```
    Route::get('/delete-student', [StudDeleteController::class, 'index']);
    Route::get('/delete/{id}', [StudDeleteController::class, 'destroy'])->name('student.delete');  
  ```
- To add today's attendance sheet
  ```
    Route::get('/addsheet', [Attendance::class, 'addsheet']);
  ```
 - Attendance
  ```    
    Route::get('/attandance', [Attendance::class, 'attendancelist']);
  ```
-To update the attendance
  ```  Route::get('/present/{id}', [Attendance::class, 'makePresent'])->name('student.present');
    Route::get('/absent/{id}', [Attendance::class, 'makeAbsent'])->name('student.absent');
  ```
-Attendance of Particulatr Student
  ```
    Route::get('/student/{id}', [Attendance::class, 'student'])->name('student.student');
  ```
