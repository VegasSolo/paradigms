public class Coursework {

	private int totalScores = 0;
	private int numScores = 0;
	
	public void addScore( int pScore ) {
		numScores++;
		if (pScore < 0)
			pScore = 0;
		else if (pScore > 100)
			pScore = 100;
		totalScores += pScore;
	}
	
	public double getAverage() {
		return totalScores / numScores;
	}
	
}
