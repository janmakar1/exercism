class HighScores
  new: (@scoreList) =>

  scores: =>
    @scoreList

  latest: =>
    @scoreList[#@scoreList]

  personalBest: =>
    copied = [v for v in *@scoreList]
    table.sort(copied)
    copied[#copied]

  personalTopThree: =>
    copied = [v for v in *@scoreList]
    table.sort(copied)
    t3, t2, t1 = table.unpack(copied, #copied-2, #copied)
    {t1, t2, t3}
