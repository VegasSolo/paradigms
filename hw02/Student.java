public class Student {

	private String firstName;
	private String lastName;
	private Exam midtermExam = new Exam();
	private Exam finalExam = new Exam();
	private Coursework homework = new Coursework();
	private Coursework activities = new Coursework();
	
	public Student ( String first, String last ) {
		firstName = first;
		lastName = last;
	}
	
	public void setMidterm (int score, String grade) {
		midtermExam.setScore(score);
		midtermExam.setLetterGrade(grade);
	}
	public void setFinal (int score, String grade) {
		finalExam.setScore(score);
		finalExam.setLetterGrade(grade);
	}
	public void addGradedHomework (int score) {
		homework.addScore(score);
	}
	public void addGradedActivity (int score) {
		activities.addScore(score);
	}
	
	private String testLowestLetter ( String midLetter, String finalLetter, String totalLetter) {
		String letter;
		int result = midLetter.compareTo( finalLetter ); // finding the lowest test score
		if (result > 0)
			letter = midLetter;
		else
			letter = finalLetter;
		result = letter.compareTo( totalLetter ); // comparing lowest test score to total grade
		if (result > 0)
			letter = totalLetter; // if total grade is less than lowest exam, pass lowest exam
								  // else, leave it as final grade
		return letter;
	}
	
	public void printGrade() {
		double Grade = 0; // course numerical grade
		String Letter; // course letter grade
		
		Grade = (activities.getAverage() * .15) + (homework.getAverage() * .25) + (midtermExam.getScore() * .25) + (finalExam.getScore() * .35);
		if (Grade >= 90.00)
			Letter = "A";
		else if (Grade >= 80.00)
			Letter = "B";
		else if (Grade >= 70.00)
			Letter = "C";
		else if (Grade >= 60.00)
			Letter = "D";
		else
			Letter = "F";
		
		Letter = testLowestLetter( midtermExam.getLetterGrade(), finalExam.getLetterGrade(), Letter ); // computes Letter after curve

		System.out.printf( "Final course grade for %s %s %s %.2f\n", firstName, lastName, Letter, Grade);
	}
	
}
