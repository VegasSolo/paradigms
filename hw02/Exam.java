public class Exam {
	
	private int score;
	private String letterGrade;
	
	public Exam() {
		score = 0;
		letterGrade = "F";
	}
	
	public Exam( int pScore, String pLetter ) {
		if (pScore < 0)
			pScore = 0;
		else if (pScore > 100)
			pScore = 100;
		score = pScore;
		if (pLetter != "A" && pLetter != "B" && pLetter != "C" && pLetter != "D" && pLetter != "F")
		{
			System.out.printf( "An incorrect letter grade was entered: %s\n", pLetter );
			pLetter = "F";
		}
		letterGrade = pLetter;
	}
	
	public float getScore() {
		return score;
	}
	public void setScore(int pScore) {
		if (pScore < 0)
			pScore = 0;
		else if (pScore > 100)
			pScore = 100;
		score = pScore;
	}
	public String getLetterGrade() {
		return letterGrade;
	}
	public void setLetterGrade(String pLetter) {
		if (pLetter != "A" && pLetter != "B" && pLetter != "C" && pLetter != "D" && pLetter != "F")
		{
			System.out.printf( "An incorrect letter grade was entered: %s\n", pLetter );
			pLetter = "F";
		}
		letterGrade = pLetter;
	}

}
