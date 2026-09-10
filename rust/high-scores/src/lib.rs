#[derive(Debug)]
pub struct HighScores<'a> {
    scores: &'a [u32]
}

impl<'a> HighScores<'a> {
    pub fn new(scores: &'a [u32]) -> Self {
        Self {
            scores
        }
    }

    pub fn scores(&self) -> &[u32] {
        self.scores
    }

    pub fn latest(&self) -> Option<u32> {
        if self.scores.is_empty() {
            None
        } else {
            let l = self.scores.len();
            Some(self.scores[l - 1])
        }
    }

    pub fn personal_best(&self) -> Option<u32> {
        if self.scores.is_empty() {
            None
        } else {
            let mut max = 0;
            for elem in self.scores {
                if *elem > max {
                    max = *elem
                }
            }
            Some(max)
        }
    }

    pub fn personal_top_three(&self) -> Vec<u32> {
        let mut v: Vec<u32> = Vec::from(self.scores);
        v.sort();
        v.reverse();
        v.truncate(3);

        v
    }
}
